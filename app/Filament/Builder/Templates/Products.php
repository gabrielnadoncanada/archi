<?php

namespace App\Filament\Builder\Templates;

use App\Filament\Builder\Sections\AboutOne;
use App\Filament\Builder\Sections\ProductList;
use App\Filament\Builder\Sections\ServiceList;
use Devlense\FilamentBuilder\TemplateBuilder;
use Filament\Forms\Components\Builder;

class Products extends TemplateBuilder
{
    protected static ?string $name = 'product_list';

    public static function schema(): array
    {
        return [
            Products::createTemplateSection('Content',
                sections: [
                    ProductList::make(),
                ],
                modifyBuilder: function (Builder $builder) {
                    $builder->collapsible()->collapsed();
                })
        ];
    }
}
