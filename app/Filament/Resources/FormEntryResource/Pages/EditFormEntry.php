<?php

namespace App\Filament\Resources\FormEntryResource\Pages;

use App\Filament\Resources\FormEntryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFormEntry extends EditRecord
{
    protected static string $resource = FormEntryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
