<?php

namespace Devlense\FilamentBuilder\Facades;

use Illuminate\Support\Facades\Facade;

class FilamentBuilder extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'filament-builder';
    }
}
