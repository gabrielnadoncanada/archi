<?php

namespace App\Filament\Builder\Templates;

use App\Filament\Builder\Sections\AddressList;
use App\Filament\Builder\Sections\Form;
use Devlense\FilamentBuilder\TemplateBuilder;
use Filament\Forms\Components\Builder;

class Contact extends TemplateBuilder
{
    protected static ?string $name = 'contact';

    public static function schema(): array
    {
        return [
            BlogPost::createTemplateSection('Content',
                sections: [
                    AddressList::make(),
                    Form::make(),
                ],
                modifyBuilder: function (Builder $builder) {
                    $builder->collapsible()->collapsed();
                }),
        ];
    }
}
