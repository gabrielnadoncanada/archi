<?php

namespace App\Filament\Builder\Templates;

use App\Filament\Builder\Sections\AboutOne;
use App\Filament\Builder\Sections\ServiceList;
use Devlense\FilamentBuilder\TemplateBuilder;
use Filament\Forms\Components\Builder;

class Services extends TemplateBuilder
{
    protected static ?string $name = 'service_list';

    public static function schema(): array
    {
        return [
            Services::createTemplateSection('Content',
                sections: [
                    ServiceList::make(),
                    AboutOne::make(),
                ],
                modifyBuilder: function (Builder $builder) {
                    $builder->collapsible()->collapsed();
                })
        ];
    }
}
