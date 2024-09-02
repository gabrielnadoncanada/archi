<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages\CreateUser;
use App\Filament\Resources\UserResource\Pages\EditUser;
use App\Filament\Resources\UserResource\Pages\ListUsers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    protected static ?string $navigationGroup = 'Site';

    protected static ?int $navigationSort = 3;

    public static function getNavigationLabel(): string
    {
        return __('filament.users.title');
    }

    public static function getLabel(): ?string
    {
        return __('filament.users.title');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema(static::getFormSchema())
                    ->columnSpan(2),
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\Placeholder::make(User::CREATED_AT)
                            ->content(fn (User $record): ?string => $record->created_at?->diffForHumans())
                            ->hidden(fn (?User $record) => $record === null),
                        Forms\Components\Placeholder::make(User::UPDATED_AT)
                            ->content(fn (User $record): ?string => $record->updated_at?->diffForHumans())
                            ->hidden(fn (?User $record) => $record === null),
                        Forms\Components\Select::make('roles')
                            ->relationship('roles', 'name')
                            ->multiple()
                            ->preload()
                            ->required(),
                    ])
                    ->columnSpan(['lg' => 1]),
            ])
            ->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make(User::NAME),
                Tables\Columns\TextColumn::make(User::EMAIL),
                TextColumn::make(User::CREATED_AT)
                    ->date()
                    ->sortable(),
                TextColumn::make(User::UPDATED_AT)
                    ->date()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                ActionGroup::make([
                    EditAction::make(),
                    DeleteAction::make(),
                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
        ];
    }

    public static function getFormSchema(): array
    {
        return [
            Forms\Components\Section::make()
                ->schema([
                    Forms\Components\Grid::make()
                        ->schema([
                            Forms\Components\TextInput::make(User::NAME)
                                ->required(),
                            Forms\Components\TextInput::make(User::EMAIL)
                                ->email()
                                ->unique(ignoreRecord: true)
                                ->required()
                                ->dehydrated(fn (string $operation): bool => $operation !== 'create')
                                ->maxLength(255)
                                ->disabled(fn (string $operation): bool => $operation !== 'create'),
                        ])->columns(2),
                ]),
            Forms\Components\Section::make('Mot de passe')
                ->collapsible()
                ->collapsed()
                ->schema([
                    Forms\Components\Grid::make()
                        ->schema([
                            Forms\Components\TextInput::make(User::PASSWORD)
                                ->password()
                                ->required(fn (?User $record) => $record === null)
                                ->rule(Password::default())
                                ->dehydrated(fn ($state): bool => filled($state))
                                ->live(debounce: 500)
                                ->password()
                                ->afterStateHydrated(function (Forms\Components\TextInput $component, $state) {
                                    $component->state('');
                                })
                                ->dehydrateStateUsing(fn ($state) => Hash::make($state))
                                ->dehydrated(fn ($state) => filled($state))
                                ->required(fn (string $context): bool => $context === 'create')
                                ->same('passwordConfirmation'),
                            Forms\Components\TextInput::make('passwordConfirmation')
                                ->password()
                                ->required()
                                ->visible(fn (Get $get): bool => filled($get(User::PASSWORD)))
                                ->dehydrated(false),
                        ])->columns(2),
                ]),
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListUsers::route('/'),
            'create' => CreateUser::route('/create'),
            'edit' => EditUser::route('/{record}/edit'),
        ];
    }
}
