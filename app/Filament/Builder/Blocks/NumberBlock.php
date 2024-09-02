<?php

namespace App\Filament\Builder\Blocks;

use Devlense\FilamentBuilder\BlockBuilder;
use Filament\Forms\Components\TextInput;

class NumberBlock extends BlockBuilder
{
    protected static string $name = 'number';

    public static function getSchema($parameters): array
    {
        return [
            TextInput::make('number_content')
                ->default('01'),
        ];
    }
}
