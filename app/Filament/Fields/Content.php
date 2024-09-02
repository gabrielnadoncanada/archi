<?php

namespace App\Filament\Fields;

use App\Filament\Blocks\RichText;
use Filament\Forms\Components\Builder;

class Content
{
    public static function make(
        string $name,
        string $context = 'form',
    ): Builder {
        return Builder::make($name)
            ->blocks([
                RichText::make(),

            ])
            ->addActionLabel('Add block')
            ->collapsible();
    }
}
