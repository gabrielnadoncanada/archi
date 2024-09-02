<?php

namespace App\Filament\Builder\Blocks;

use App\Filament\Builder\Fields\ImageField;
use Devlense\FilamentBuilder\BlockBuilder;

class ImageBlock extends BlockBuilder
{
    protected static string $name = 'image';

    public static function getSchema($parameters): array
    {
        return [
            ImageField::make(),
        ];
    }
}
