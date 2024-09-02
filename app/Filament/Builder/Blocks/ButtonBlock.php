<?php

namespace App\Filament\Builder\Blocks;

use App\Filament\Builder\Fields\ButtonField;
use Devlense\FilamentBuilder\BlockBuilder;

class ButtonBlock extends BlockBuilder
{
    protected static string $name = 'button';

    public static function getSchema($parameters): array
    {
        return [
            ButtonField::make(),
        ];
    }
}
