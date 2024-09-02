<?php

namespace App\Filament\Builder\Blocks;

use App\Filament\Builder\Fields\ButtonField;
use Devlense\FilamentBuilder\BlockBuilder;
use Filament\Forms\Components\Repeater;

class ButtonsBlock extends BlockBuilder
{
    protected static string $name = 'buttons';

    public static function getSchema($parameters): array
    {
        return [
            Repeater::make('buttons')
                ->schema([
                    ButtonField::make(),
                ]),
        ];
    }
}
