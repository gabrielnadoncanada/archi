<?php

namespace App\Filament\Builder\Sections;

use App\Filament\Builder\Fields\ImageField;
use Devlense\FilamentBuilder\SectionBuilder;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;

class TestimonialSlider extends SectionBuilder
{
    protected static string $name = 'testimonial_slider';


    public static function make($parameters = []): Block
    {
        static::$parameters = $parameters;

        return Block::make(static::$name)
            ->schema([
                Group::make([
                    TextInput::make('subtitle')
                        ->default('Testimonial'),
                    TextInput::make('title')
                        ->default('Client Experiences'),
                    Textarea::make('description')
                        ->default('Inspiring Stories from Our Clients, Where Dreams Find Their Designers')
                        ->columnSpanFull(),
                ])->columns(),
                Repeater::make('items')
                    ->collapsible()
                    ->collapsed()
                    ->cloneable()
                    ->schema([
                        Textarea::make('description')
                            ->default('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.')
                            ->required(),
                        TextInput::make('author')
                            ->default('John Doe')
                            ->required(),
                        TextInput::make('company')
                            ->default('Company Name')
                            ->required(),
                    ])
                    ->defaultItems(5),
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
