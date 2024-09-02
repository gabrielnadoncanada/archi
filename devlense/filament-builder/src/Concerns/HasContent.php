<?php

namespace Devlense\FilamentBuilder\Concerns;

use App\Filament\Builder\Templates\Single;
use Devlense\FilamentBuilder\Models\Content;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait HasContent
{

    public function builder(): MorphOne
    {
        return $this->morphOne(config('filament-builder.content_model', Content::class), 'contentable');
    }
}
