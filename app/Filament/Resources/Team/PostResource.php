<?php

namespace App\Filament\Resources\Team;

use App\Filament\Fields\IsVisible;
use App\Filament\Fields\Meta;
use App\Filament\Fields\TitleWithSlugInput;
use App\Filament\Resources\Team\PostResource\Pages;
use App\Models\Team\Post;
use App\Traits\HasMeta;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\ReplicateAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Pboivin\FilamentPeek\Tables\Actions\ListPreviewAction;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $slug = 'team/posts';

    protected static ?string $navigationGroup = 'Team';

    protected static ?string $recordTitleAttribute = Post::TITLE;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getTemplateModel(): string
    {
        return 'App\Models\TeamPost';
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
            Group::make()
                ->schema([
                    Group::make()
                        ->schema([
                            Tabs::make('Tabs')
                                ->tabs([
                                    Tabs\Tab::make('General')
                                        ->schema(static::getGeneralSchema()),
                                    Tabs\Tab::make('SEO')
                                        ->schema([
                                            Meta::make(),
                                        ]),
                                ]),
                        ])
                        ->columnSpan(['lg' => 2]),
                    Group::make()
                        ->schema([
                            Section::make('Status')
                                ->schema([
                                    Toggle::make(Post::IS_VISIBLE)
                                        ->default(true),
                                    DatePicker::make(Post::PUBLISHED_AT)
                                        ->default(now())
                                        ->required(),
                                ]),
                        ])
                        ->columnSpan(['lg' => 1]),
                ])->columns(3),
        ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make(Post::IMAGE),
                TextColumn::make(Post::TITLE)
                    ->tooltip(fn ($record): string => $record->{Post::DESCRIPTION} ?? '')
                    ->searchable()
                    ->sortable(),
                IsVisible::make(Post::IS_VISIBLE),
            ])
            ->filters([])
            ->actions([
                ActionGroup::make([
                    ListPreviewAction::make(),
                    Tables\Actions\EditAction::make(),
                    ReplicateAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ]),
            ])
            ->groupedBulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Define your relations here
        ];
    }

    public static function getGeneralSchema(): array
    {
        return [
            TitleWithSlugInput::make(
                fieldTitle: Post::TITLE,
                fieldSlug: Post::SLUG,
            )
                ->afterStateUpdated(function ($get, $state, $set) {
                    if (class_has_trait(static::$model, HasMeta::class)) {
                        if (empty($get('meta.title')) && ! empty($state[Post::TITLE])) {
                            $set('meta.title', $state[Post::TITLE]);
                        }
                    }
                }),
            Textarea::make(Post::DESCRIPTION)
                ->rows(3)
                ->required()
                ->live(true)
                ->afterStateUpdated(function ($get, $state, $set) {
                    if (class_has_trait(static::$model, HasMeta::class)) {
                        if (empty($get('meta.description')) && ! empty($state)) {
                            $set('meta.description', $state);
                        }
                    }
                }),
            FileUpload::make(Post::IMAGE)
                ->image(),
            KeyValue::make(Post::SOCIAL_LINK)
            ->keyLabel('Name')
            ->valueLabel('Link')
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
