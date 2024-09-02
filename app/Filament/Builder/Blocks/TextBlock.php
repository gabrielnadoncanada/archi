<?php

namespace App\Filament\Builder\Blocks;

use App\Filament\Builder\Fields\TextField;
use Devlense\FilamentBuilder\BlockBuilder;

class TextBlock extends BlockBuilder
{
    protected static string $name = 'text';

    public static function getSchema($parameters): array
    {
        return [
            TextField::make(),
        ];
    }
}
