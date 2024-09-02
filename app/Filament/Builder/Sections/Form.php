<?php

namespace App\Filament\Builder\Sections;

use App\Filament\Builder\Blocks\FormBlock;
use App\Filament\Builder\Blocks\ImageBlock;
use App\Filament\Builder\Fields\ImageField;
use Devlense\FilamentBuilder\SectionBuilder;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;

class Form extends SectionBuilder
{
    protected static string $name = 'form';

    public static function defaultParameters(): array
    {
        return [

        ];
    }

    public static function make($parameters = []): Block
    {
        static::$parameters = $parameters;

        return Block::make(static::$name)
            ->schema([
                Group::make([
                    TextInput::make('subtitle')
                        ->default('Projects'),
                    TextInput::make('title')
                        ->default('Creative Showcase'),
                    Textarea::make('description')
                        ->default('Where Imagination Meets Reality in Every Frame')
                        ->columnSpanFull(),
                    ImageField::make()
                    ->columnSpanFull(),
                ])->columns(),
            ]);
    }

    public static function blocks($parameters): array
    {
        return [
            ImageBlock::make(),
            FormBlock::make(),
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

    protected static function maxItems(): int
    {
    }
}
