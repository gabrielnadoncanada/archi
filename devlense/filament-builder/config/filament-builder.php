<?php

return [
    'templates' => [
        'namespace' => 'App\\Filament\\Builder\\Templates',
        'path' => app_path('Filament/Builder/Templates'),
        'register' => [
            //
        ],
    ],

    'sections' => [
        'namespace' => 'App\\Filament\\Builder\\Sections',
        'path' => app_path('Filament/Builder/Sections'),
        'register' => [
            //
        ],
    ],

    'blocks' => [
        'namespace' => 'App\\Filament\\Builder\\Blocks',
        'path' => app_path('Filament/Builder/Blocks'),
        'register' => [
            //
        ],
        'default' => [

        ],
    ],

    'content_model' => Devlense\FilamentBuilder\Models\Content::class,
    'template_model' => Devlense\FilamentBuilder\Models\Template::class,

    'content_table_name' => 'contents',
    'template_table_name' => 'templates',
];
