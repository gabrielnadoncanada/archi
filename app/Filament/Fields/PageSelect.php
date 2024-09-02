<?php

namespace App\Filament\Fields;

use App\Models\Page;
use Filament\Forms\Components\Select;

class PageSelect extends Select
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->options(fn () => Page::all()->pluck('title', 'id')->toArray());
    }
}
