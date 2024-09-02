<?php

namespace App\Filament\Builder\Fields;

use Filament\Forms\Components\FileUpload;

class ImageField
{
    public static function make(): FileUpload
    {
        return FileUpload::make('image')
            ->image()
            ->multiple(false)
            ->default('https://via.placeholder.com/150');
    }
}
