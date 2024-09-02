<?php

namespace App\Filament\Builder\Templates;

use App\Filament\Builder\Sections\Content;
use Devlense\FilamentBuilder\TemplateBuilder;
use Filament\Forms\Components\Builder;

class BlogPost extends TemplateBuilder
{
    protected static ?string $name = 'blog-post';

    public static function schema(): array
    {
        return [
            BlogPost::createTemplateSection('Content',
                sections: [
                ],
                modifyBuilder: function (Builder $builder) {
                    $builder->collapsible()->collapsed();
                }),
        ];
    }
}
