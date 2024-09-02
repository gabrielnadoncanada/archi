<?php

namespace App\Traits;

use App\Models\Meta;
use App\Models\Template;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait HasTemplate
{
    public function template(): MorphOne
    {
        return $this->morphOne(Template::class, 'templateable');
    }

}
