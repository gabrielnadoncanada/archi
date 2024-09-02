<?php

namespace App\Filament\Builder\Templates;

use App\Filament\Builder\Sections\AboutOne;
use App\Filament\Builder\Sections\ServiceList as ServicesSection;
use App\Filament\Builder\Sections\TeamList;
use Devlense\FilamentBuilder\TemplateBuilder;
use Filament\Forms\Components\Builder;

class Team extends TemplateBuilder
{
    protected static ?string $name = 'team_list';

    public static function schema(): array
    {
        return [
            Team::createTemplateSection('Content',
                sections: [
                    TeamList::make(),
                ],
                modifyBuilder: function (Builder $builder) {
                    $builder->collapsible()->collapsed();
                })
        ];
    }
}
