<?php

namespace App\Filament\Resources\Product;

use App\Filament\Fields\IsVisible;
use App\Filament\Fields\TitleWithSlugInput;
use App\Filament\Resources\Product\CategoryResource\Pages;
use App\Models\Product\Category;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $navigationGroup = 'Product';

    protected static ?int $navigationSort = 1;

    protected static ?string $recordTitleAttribute = Category::TITLE;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('General')
                    ->schema(self::getGeneralSchema())
                    ->collapsible(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make(Category::IMAGE),
                 TextColumn::make(Category::TITLE)
                     ->tooltip(fn($record): string => $record->{Category::DESCRIPTION} ?? '')
                    ->searchable()
                    ->sortable(),
                IsVisible::make(Category::IS_VISIBLE),

            ])
            ->filters([
                //
            ])
            ->headerActions([

            ])
            ->actions([
                ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ]),
            ])
            ->groupedBulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getGeneralSchema(): array
    {
        return [
            TitleWithSlugInput::make(
                fieldTitle: Category::TITLE,
                fieldSlug: Category::SLUG,
            )->columnSpanFull(),

            Textarea::make(Category::DESCRIPTION)
                ->rows(5)
                ->columnSpan('full'),
            FileUpload::make(Category::IMAGE)
                ->image(),
            Toggle::make(Category::IS_VISIBLE)
                ->default(true),

        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}
