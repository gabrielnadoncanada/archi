<?php

namespace App\Filament\Builder\Blocks;

use App\Filament\Builder\Fields\HeadingField;
use Devlense\FilamentBuilder\BlockBuilder;

class HeadingBlock extends BlockBuilder
{
    protected static string $name = 'heading';

    public static function getSchema($parameters): array
    {
        return [
            HeadingField::make(),
        ];
    }
}
