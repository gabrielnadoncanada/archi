<?php

namespace App\Filament\Builder\Sections;

use App\Filament\Builder\Fields\ImageField;
use Devlense\FilamentBuilder\SectionBuilder;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use PHPUnit\Metadata\Group;

class HeroBanner extends SectionBuilder
{
    protected static string $name = 'hero_banner';



    public static function make($parameters = []): Block
    {
        static::$parameters = $parameters;

        return Block::make(static::$name)
            ->preview('components.filament-builder.sections.hero_banner')
            ->schema([
                Repeater::make('items')
                    ->collapsible()
                    ->collapsed()
                    ->cloneable()
                    ->schema([
                        \Filament\Forms\Components\Group::make()
                            ->schema([
                                TextInput::make('title')
                                    ->default('Elegant Design Showcase')->required()->columnSpanFull(),
                                TextInput::make('heading_one')->required()
                                    ->default('Elegance'),
                                TextInput::make('heading_two')->required()
                                    ->default('Redefined'),
                                ImageField::make()->required()->columnSpanFull(),
                            ])->columns(),
                    ])
                    ->defaultItems(1),
            ]);
    }

    public static function blocks($parameters): array
    {
        return [
        ];
    }

    public static function defaultParameters(): array
    {
        return [

        ];
    }

    public static function settings($parameters): array
    {
        return [

        ];
    }

    public static function preset(): array
    {
        return [

        ];
    }

    protected static function maxItems(): int {}
}
