<?php

namespace App\Filament\Resources\FormEntryResource\Pages;

use App\Filament\Resources\FormEntryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFormEntries extends ListRecords
{
    protected static string $resource = FormEntryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
