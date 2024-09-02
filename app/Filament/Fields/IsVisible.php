<?php

namespace App\Filament\Fields;

use Filament\Tables\Columns\TextColumn;

class IsVisible extends TextColumn
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->label('Status');
        $this->formatStateUsing(fn (string $state): string => match ($state) {
            '0' => 'Hidden',
            '1' => 'Visible',
        });
        $this->color(fn (string $state): string => match ($state) {
            '0' => 'danger',
            '1' => 'success',
        });
        $this->badge();
    }
}
