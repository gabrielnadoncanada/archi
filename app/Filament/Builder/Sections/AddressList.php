<?php

namespace App\Filament\Builder\Sections;

use App\Filament\Builder\Fields\ImageField;
use Devlense\FilamentBuilder\SectionBuilder;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;

class AddressList extends SectionBuilder
{
    protected static string $name = 'address_list';


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
                        TextInput::make('country')
                            ->default('USA')
                            ->required(),
                        TextInput::make('company')
                            ->default('Architronix Inc.')
                            ->required(),
                        TextInput::make('address')
                            ->default('208 English Road, High Point, NC 27262, USA')
                            ->required(),
                        TextInput::make('phone')
                            ->default('336 885 6670')
                            ->required(),
                        TextInput::make('email')
                            ->default('hello@architronix.com')
                            ->required(),
                    ])
                    ->defaultItems(3),
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


