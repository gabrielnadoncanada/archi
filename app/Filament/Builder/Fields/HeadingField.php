<?php

namespace App\Filament\Builder\Fields;

use Filament\Forms\Components\Group;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\ToggleButtons;

class HeadingField
{
    public static function make($parameters = [
        'heading_level' => 'h1',
        'heading_size' => 'h1',
    ]): Group
    {
        return Group::make()
            ->schema([
                Textarea::make('heading_content')
                    ->columnSpanFull()
                    ->default('Lorem ipsum dolor sit amet.'),
                ToggleButtons::make('heading_level')
                    ->options([
                        'h1' => 'H1',
                        'h2' => 'H2',
                        'h3' => 'H3',
                        'h4' => 'H4',
                        'h5' => 'H5',
                        'h6' => 'H6',
                    ])
                    ->inline()
                    ->hidden()
                    ->default($parameters['heading_level']),
                ToggleButtons::make('heading_size')
                    ->label('Heading Size')
                    ->options([
                        'h4' => 'Small',
                        'h3' => 'Medium',
                        'h2' => 'Large',
                        'h1' => 'Extra Large',
                    ])
                    ->inline()
                    ->hidden()
                    ->default($parameters['heading_size']),
            ])
            ->default('Lorem Ipsum Dolor Sit Amet');
    }
}
