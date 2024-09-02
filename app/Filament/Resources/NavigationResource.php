<?php

namespace App\Filament\Resources;

use App\Filament\Fields\MenuBuilder;
use App\Filament\Resources\NavigationResource\Pages\CreateNavigation;
use App\Filament\Resources\NavigationResource\Pages\EditNavigation;
use App\Filament\Resources\NavigationResource\Pages\ListNavigations;
use App\Models\Navigation;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class NavigationResource extends Resource
{
    protected static ?string $model = Navigation::class;

    protected static ?string $navigationIcon = 'heroicon-o-bars-3';

    protected static ?string $navigationGroup = 'Site';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('')->schema([
                    TextInput::make(Navigation::TITLE)
                        ->reactive()
                        ->debounce()
                        ->afterStateUpdated(function (?string $state, Set $set) {
                            if (! $state) {
                                return;
                            }

                            $set(Navigation::HANDLE, Str::slug($state));
                        })
                        ->required(),
                    Hidden::make(Navigation::HANDLE)
                        ->required()
                        ->unique(column: Navigation::HANDLE, ignoreRecord: true),
                    MenuBuilder::make(Navigation::ITEMS)
                        ->default([])
                        ->columnSpanFull(),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make(Navigation::TITLE)
                    ->searchable(),
                TextColumn::make(Navigation::HANDLE)
                    ->searchable(),
                TextColumn::make(Navigation::CREATED_AT)
                    ->dateTime()
                    ->sortable(),
                TextColumn::make(Navigation::UPDATED_AT)
                    ->dateTime()
                    ->sortable(),
            ])
            ->actions([
                ActionGroup::make([
                    EditAction::make(),
                    DeleteAction::make(),
                ]),
            ])
            ->filters([

            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListNavigations::route('/'),
            'create' => CreateNavigation::route('/create'),
            'edit' => EditNavigation::route('/{record}/edit'),
        ];
    }
}
