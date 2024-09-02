<?php

namespace App\Filament\Builder\Fields;

use App\Filament\Fields\UrlSelectionField;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\ToggleButtons;

class ButtonField
{
    public static function make(): Group
    {
        return Group::make()
            ->schema([
                ToggleButtons::make('style')
                    ->options([
                        'primary' => 'Primary',
                        'outline' => 'Outline',
                    ])
                    ->hidden()
                    ->inline()
                    ->default('primary'),
                UrlSelectionField::make('action')
                    ->columnSpanFull(),
            ]);
    }
}
