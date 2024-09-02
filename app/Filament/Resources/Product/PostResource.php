<?php

namespace App\Filament\Resources\Product;

use App\Filament\Fields\IsVisible;
use App\Filament\Fields\Meta;
use App\Filament\Fields\TitleWithSlugInput;
use App\Filament\Resources\Product\PostResource\Pages;
use App\Models\Product\Post;
use App\Traits\HasMeta;
use Filament\Actions\ReplicateAction;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieTagsInput;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Pboivin\FilamentPeek\Tables\Actions\ListPreviewAction;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;


    protected static ?string $navigationGroup = 'Product';

    protected static ?string $recordTitleAttribute = Post::TITLE;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
                                    Tabs\Tab::make('Images')
                                        ->schema(static::getImagesSchema()),
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
                            Section::make('Associations')
                                ->schema([
                                    Select::make('categories')
                                        ->multiple()
                                        ->relationship('categories', Post::TITLE)
                                        ->searchable()
                                        ->preload()
                                        ->editOptionForm(function ($record) {
                                            return $record->createOptionForm(CategoryResource::getGeneralSchema());
                                        })
                                        ->createOptionForm(CategoryResource::getGeneralSchema()),
                                    SpatieTagsInput::make('tags'),
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
                    ->tooltip(fn($record): string => $record->{Post::DESCRIPTION} ?? "")
                    ->searchable()
                    ->sortable(),
                TextColumn::make('categories.title')
                    ->badge(),
                IsVisible::make(Post::IS_VISIBLE),
            ])
            ->filters([])
            ->actions([
                ActionGroup::make([
                    ListPreviewAction::make(),
                    ReplicateAction::make(),
                    Tables\Actions\EditAction::make(),
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
            ),
            Textarea::make(Post::DESCRIPTION)
                ->rows(3),
            FileUpload::make(Post::IMAGE)
                ->image(),
        ];
    }

    public static function getImagesSchema(): array
    {
        return [
            FileUpload::make(Post::GALLERY)
                ->image()
                ->multiple()
                ->reorderable(),
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
