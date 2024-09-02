<?php

namespace App\Filament\Builder\Sections;

use App\Filament\Builder\Fields\ImageField;
use Devlense\FilamentBuilder\SectionBuilder;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;

class AboutThree extends SectionBuilder
{
    protected static string $name = 'about_three';


    public static function make($parameters = []): Block
    {
        static::$parameters = $parameters;

        return Block::make(static::$name)
            ->schema([
                Group::make([
                    TextInput::make('subtitle')
                        ->default('About'),
                    TextInput::make('title')
                        ->default('Foundations of Architronix'),
                    Textarea::make('description')
                        ->default('Crafting Architectural Masterpieces and Designing Interior Wonders')
                        ->columnSpanFull(),
                ])->columns(),
                Group::make([
                    ImageField::make()->required(),
                    TextInput::make('list_title')
                        ->default('Crafting Your Vision: Our Design Process')
                        ->required(),
                    Repeater::make('items')
                        ->collapsible()
                        ->collapsed()
                        ->cloneable()
                        ->schema([
                            TextInput::make('title')
                                ->default('Innovation Beyond Boundaries')
                                ->required(),
                            Textarea::make('description')
                                ->default('We thrive on challenging the norms, infusing each project with fresh, innovative perspectives that defy convention.')
                                ->required(),
                        ])
                        ->defaultItems(3),
                ])->columns(),
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

    protected static function maxItems(): int
    {
    }
}
