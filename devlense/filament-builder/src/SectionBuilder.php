<?php

namespace Devlense\FilamentBuilder;

use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Toggle;

abstract class SectionBuilder
{
    protected static string $name;

    public static array $parameters;

    protected static ?string $component;

    public static function getComponent(): string
    {
        if (isset(static::$component)) {
            return static::$component;
        }

        return 'filament-builder.sections.'.static::$name;
    }

    public static function getName(): string
    {
        return static::$name;
    }

    public static function getParameters(): array
    {
        return static::$parameters;
    }

    public static function make($parameters = []): Block
    {
        static::$parameters = $parameters;

        $parameters = array_merge(static::defaultParameters(), static::getParameters());

        return Block::make(static::$name)
            ->schema([
                Tabs::make()->tabs([
                    Tabs\Tab::make('Content')
                        ->schema(static::content($parameters)),
                    Tabs\Tab::make('Settings')
                        ->schema([
                            Toggle::make('hidden')
                                ->label('Hidden')
                                ->default(false),
                            ...static::settings($parameters),
                        ]),
                ]),
            ]);
    }

    protected static function content($parameters): array
    {
        return [
            Builder::make('blocks')
                ->hiddenLabel()
                ->collapsible()
                ->collapsed()
                ->maxItems(static::maxItems())
                ->blocks(static::blocks($parameters))
                ->default(static::preset())
                ->collapsible(),
        ];
    }

    protected static function blocks($parameters): array
    {
        return [

        ];
    }

    abstract protected static function settings($parameters): array;

    abstract protected static function preset(): array;

    abstract protected static function maxItems(): int;

    abstract protected static function defaultParameters(): array;

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
