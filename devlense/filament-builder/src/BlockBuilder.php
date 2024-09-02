<?php

namespace Devlense\FilamentBuilder;

use Filament\Forms\Components\Builder\Block;

abstract class BlockBuilder
{
    protected static ?string $component;

    protected static string $name;

    abstract public static function getSchema($parameters);

    public static function make($parameters = []): Block
    {
        return Block::make(static::getName())
            ->schema(static::getSchema($parameters));
    }

    public static function getComponent(): string
    {
        if (isset(static::$component)) {
            return static::$component;
        }

        return 'filament-builder.blocks.'.static::getName();
    }

    public static function getName(): string
    {
        return static::$name;
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
