<?php

namespace Devlense\FilamentBuilder;

use Devlense\FilamentBuilder\Facades\FilamentBuilder;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;
use ReflectionClass;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Symfony\Component\Finder\SplFileInfo;

class FilamentBuilderServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name(FilamentBuilderManager::ID)
            ->hasConfigFile()
            ->hasMigrations(
                'create_contents_table',
            )
            ->hasViews()
            ->hasInstallCommand(function (InstallCommand $installCommand) {
                $installCommand
                    ->startWith(fn (InstallCommand $installCommand) => $installCommand->call('filament:upgrade'))
                    ->publishConfigFile()
                    ->publishMigrations()
                    ->askToRunMigrations();
            });
    }

    public function packageRegistered(): void
    {
        parent::packageRegistered();

        $this->app->singleton('filament-builder', function () {
            return new FilamentBuilderManager;
        });
    }

    public function bootingPackage(): void
    {
        $this->registerComponentsFromDirectory(
            TemplateBuilder::class,
            config('filament-builder.templates.register'),
            config('filament-builder.templates.path'),
            config('filament-builder.templates.namespace')
        );

        $this->registerComponentsFromDirectory(
            SectionBuilder::class,
            config('filament-builder.sections.register'),
            config('filament-builder.sections.path'),
            config('filament-builder.sections.namespace')
        );

        $this->registerComponentsFromDirectory(
            BlockBuilder::class,
            config('filament-builder.blocks.register'),
            config('filament-builder.blocks.path'),
            config('filament-builder.blocks.namespace')
        );
    }

    protected function registerComponentsFromDirectory(string $baseClass, array $register, ?string $directory, ?string $namespace): void
    {
        if (blank($directory) || blank($namespace)) {
            return;
        }

        $filesystem = app(Filesystem::class);

        if ((! $filesystem->exists($directory)) && (! Str::of($directory)->contains('*'))) {
            return;
        }

        $namespace = Str::of($namespace);

        $register = array_merge(
            $register,
            collect($filesystem->allFiles($directory))
                ->map(function (SplFileInfo $file) use ($namespace): string {
                    $variableNamespace = $namespace->contains('*') ? str_ireplace(
                        ['\\'.$namespace->before('*'), $namespace->after('*')],
                        ['', ''],
                        Str::of($file->getPath())
                            ->after(base_path())
                            ->replace(['/'], ['\\']),
                    ) : null;

                    return (string) $namespace
                        ->append('\\', $file->getRelativePathname())
                        ->replace('*', $variableNamespace)
                        ->replace(['/', '.php'], ['\\', '']);
                })
                ->filter(fn (string $class): bool => is_subclass_of($class, $baseClass) && (! (new ReflectionClass($class))->isAbstract()))
                ->each(fn (string $class) => FilamentBuilder::registerComponent($class, $baseClass))
                ->all(),
        );
    }
}
