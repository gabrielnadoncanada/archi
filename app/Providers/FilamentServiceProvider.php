<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\DeleteAction as TableDeleteAction;
use Filament\Tables\Actions\DetachAction;
use Filament\Tables\Actions\EditAction as TableEditAction;
use Filament\Tables\Actions\ReplicateAction as TableReplicateAction;
use Filament\Tables\Actions\ViewAction as TableViewAction;
use Filament\Tables\Columns\Column;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class FilamentServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->configureTable();
        $this->configureColumns();
        $this->configureForm();

        FilamentAsset::register([
            Css::make('filament-navigation-styles', __DIR__.'/../../resources/dist/filament-menu.css'),
            Css::make('filament-title-with-slug-styles', __DIR__.'/../../resources/dist/filament-title-with-slug.css'),
            Js::make('filament-menu', resource_path('dist/filament-menu.js')),
        ]);
    }

    protected function configureTable(): void
    {
        Table::configureUsing(
            fn (Table $table) => $table
                ->filtersTriggerAction(
                    fn (Action $action) => $action
                        ->button()
                        ->label('Filtres'),
                )->filtersFormWidth('2xl')
                ->paginationPageOptions([5, 10, 25, 50])
        );


        ImageColumn::configureUsing(function (ImageColumn $column): void {
            $column->default(asset('/images/default/slider.jpg'));
            $column->disk(config('filesystems.default'))->visibility('public');
        }, isImportant: true);

        //        TableEditAction::configureUsing(function (TableEditAction $action) {
        //            $action->tooltip($action->getLabel());
        //            $action->label('');
        //        }, isImportant: true);
        //
        //        DetachAction::configureUsing(function (DetachAction $action) {
        //            $action->tooltip($action->getLabel());
        //            $action->label('');
        //        }, isImportant: true);
        //
        //        TableDeleteAction::configureUsing(function (TableDeleteAction $action) {
        //            $action->tooltip($action->getLabel());
        //            $action->label('');
        //        }, isImportant: true);
        //
        //        TableViewAction::configureUsing(function (TableViewAction $action) {
        //            $action->tooltip($action->getLabel());
        //            $action->label('');
        //        }, isImportant: true);
        //
        //        TableReplicateAction::configureUsing(function (TableReplicateAction $action) {
        //            $action->tooltip($action->getLabel());
        //            $action->label('');
        //        }, isImportant: true);

        TableReplicateAction::configureUsing(function (TableReplicateAction $action) {
            $action->beforeReplicaSaved(function (Model $replica): void {
                if ($replica->slug === null || $replica->title === null) {
                    return;
                }
                $uniqueId = substr(md5(uniqid(rand(), true)), 0, 8);
                $replica['slug'] .= '-'.$uniqueId;
                $replica['title'] .= '-'.$uniqueId;
            });
        });
    }

    protected function configureColumns(): void
    {
        Column::configureUsing(function (Column $column): void {
            $column
                ->toggleable()
                ->sortable();
        });

        TextColumn::configureUsing(function (TextColumn $column): void {
            $column->searchable();
        });
    }

    protected function configureForm(): void
    {
        Forms\Components\DatePicker::configureUsing(function ($component) {
            $component->default(now());
        });
        Forms\Components\TextInput::configureUsing(function ($component) {
            $component->maxLength(255);
        });
        Forms\Components\Textarea::configureUsing(function ($component) {
            $component->maxLength(65000);
        });

        Forms\Components\Repeater::configureUsing(function ($component) {
            $component
                ->collapseAllAction(fn ($action) => $action->icon('heroicon-o-arrows-pointing-in'))
                ->expandAllAction(fn ($action) => $action->icon('heroicon-o-arrows-pointing-out'));
        });

        Forms\Components\FileUpload::configureUsing(function ($component) {
            $component->default('e');
        });

//        Forms\Components\RichEditor::configureUsing(function ($component) {
//            $component
//                ->toolbarButtons([
//                    'blockquote',
//                    'bold',
//                    'bulletList',
//                    'italic',
//                    'link',
//                    'orderedList',
//                    'redo',
//                    'strike',
//                    'underline',
//                    'undo',
//                ]);
//
//        });
        Forms\Components\Builder::configureUsing(function ($component) {
            $component
                ->blockNumbers(false);
        });

        Forms\Components\Repeater::configureUsing(function ($component) {
            $component
                ->reorderable()
                ->cloneable();
        });

        Forms\Components\ToggleButtons::configureUsing(function ($component) {
            $component
                ->inline();
        });

        //        Forms\Components\FileUpload::configureUsing(function ($component) {
        //            $component
        //                ->optimize('webp');
        //        });
    }

    protected function configureFilamentShield(): void
    {
        FilamentShield::configurePermissionIdentifierUsing(
            function ($resource) {
                $resource = Str::of($resource)
                    ->afterLast('Resources\\')
                    ->before('Resource')
                    ->replace('\\', '::');
                if ($resource->contains('::')) {

                    return str($resource)->beforeLast('::').'::'.str($resource)->afterLast('::')->lcfirst();
                }

                return str($resource)->lcfirst();
            }
        );
    }

    protected function registerRenderHook(): void
    {
        Filament::registerRenderHook(
            'panels::body.start',
            fn (): View => view('components.staging-banner'),
        );
    }
}
