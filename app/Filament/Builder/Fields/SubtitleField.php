<?php

namespace App\Filament\Builder\Fields;

use Filament\Forms\Components\Group;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;

class SubtitleField
{
    public static function make(): Group
    {
        return Group::make()
            ->schema([
                TextInput::make('subtitle_content')
                    ->columnSpanFull()

                    ->default('Lorem ipsum dolor sit amet.'),
                ToggleButtons::make('subtitle_level')
                    ->options([
                        'span' => 'SPAN',
                        'h1' => 'H1',
                        'h2' => 'H2',
                        'h3' => 'H3',
                        'h4' => 'H4',
                        'h5' => 'H5',
                        'h6' => 'H6',
                    ])
                    ->hidden()
                    ->default('span')
                    ->inline(),
            ]);
    }
}
