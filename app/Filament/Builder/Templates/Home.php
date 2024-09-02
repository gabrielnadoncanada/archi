<?php

namespace App\Filament\Builder\Templates;

use App\Filament\Builder\Sections\BlogSlider;
use Devlense\FilamentBuilder\TemplateBuilder;
use Filament\Forms\Components\Builder;

final class Home extends TemplateBuilder
{
    protected static ?string $name = 'home';

    public static function schema(): array
    {
        return [
            Home::createTemplateSection('Content',
                modifyBuilder: function (Builder $builder) {
                $builder->collapsible()->collapsed();
            }),
        ];
    }
}
