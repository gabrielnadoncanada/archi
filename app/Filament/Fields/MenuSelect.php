<?php

namespace App\Filament\Fields;

use App\Models\Navigation;
use Filament\Forms\Components\Select;

class MenuSelect extends Select
{
    protected string $optionValueProperty = 'id';

    protected function setUp(): void
    {
        parent::setUp();

        $this->options(function (MenuSelect $component) {
            return Navigation::pluck('title', $component->getOptionValueProperty());
        });
    }

    public function getOptionValueProperty(): string
    {
        return $this->optionValueProperty;
    }
}
