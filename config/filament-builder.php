<?php

use App\Filament\Builder\Sections\AboutOne;
use App\Filament\Builder\Sections\BlogSlider;
use App\Filament\Builder\Sections\Gallery;
use App\Filament\Builder\Sections\HeroBanner;
use App\Filament\Builder\Sections\ProjectSlider;
use App\Filament\Builder\Sections\Section;
use App\Filament\Builder\Sections\ServiceSlider;
use App\Filament\Builder\Sections\TestimonialSlider;

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

            HeroBanner::make(),
            BlogSlider::make(),
            TestimonialSlider::make(),
            ServiceSlider::make(),
            Gallery::make(),
            AboutOne::make(),
            ProjectSlider::make()
        ],
    ],
];
