<?php

namespace App\Filament\Fields;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;

class Meta
{
    public static function make(): Group
    {
        return Group::make([
            TextInput::make('title')
                ->label('Title'),
            Textarea::make('description')
                ->label('Description')
                ->rows(3),
            FileUpload::make('image')
                ->image()
                ->label('Image'),
            Toggle::make('indexable')
                ->default(true)
                ->label('Indexable'),
        ])->relationship('meta');
    }
}
