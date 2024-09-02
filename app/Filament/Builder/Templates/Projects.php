<?php

namespace App\Filament\Builder\Templates;

use App\Filament\Builder\Sections\AboutOne;
use App\Filament\Builder\Sections\ProjectList;
use App\Filament\Builder\Sections\ServiceList;
use Devlense\FilamentBuilder\TemplateBuilder;
use Filament\Forms\Components\Builder;

class Projects extends TemplateBuilder
{
    protected static ?string $name = 'project_list';

    public static function schema(): array
    {
        return [
            Services::createTemplateSection('Content',
                sections: [
                    ProjectList::make(),
                ],
                modifyBuilder: function (Builder $builder) {
                    $builder->collapsible()->collapsed();
                })
        ];
    }
}
