<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FormEntryResource\Pages;
use App\Models\FormEntry;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class FormEntryResource extends Resource
{
    protected static ?string $label = 'message';

    protected static ?string $pluralLabel = 'messages';

    protected static ?string $model = FormEntry::class;

    protected static ?string $navigationGroup = 'Site';

    protected static ?int $navigationSort = 2;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make('Informations')
                ->schema([
                    Forms\Components\TextInput::make(FormEntry::FIRST_NAME)
                        ->disabled(),
                    Forms\Components\TextInput::make(FormEntry::LAST_NAME)
                        ->disabled(),
                    Forms\Components\TextInput::make(FormEntry::EMAIL)
                        ->disabled(),
                    Forms\Components\TextInput::make(FormEntry::TEL)
                        ->disabled(),
                    Forms\Components\Textarea::make(FormEntry::MESSAGE)
                        ->disabled(),
                ]),

        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make(FormEntry::FIRST_NAME),
                Tables\Columns\TextColumn::make(FormEntry::LAST_NAME),
                Tables\Columns\TextColumn::make(FormEntry::EMAIL),
                Tables\Columns\TextColumn::make(FormEntry::TEL),
            ])
            ->filters([
                // ... your filters
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFormEntries::route('/'),
            'create' => Pages\CreateFormEntry::route('/create'),
            'edit' => Pages\EditFormEntry::route('/{record}/edit'),
        ];
    }
}
