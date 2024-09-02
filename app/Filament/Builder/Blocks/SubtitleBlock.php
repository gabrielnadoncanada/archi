<?php

namespace App\Filament\Builder\Blocks;

use App\Filament\Builder\Fields\SubtitleField;
use Devlense\FilamentBuilder\BlockBuilder;

class SubtitleBlock extends BlockBuilder
{
    protected static string $name = 'subtitle';

    public static function getSchema($parameters): array
    {
        return [
            SubtitleField::make(),
        ];
    }
}
