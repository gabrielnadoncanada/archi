<?php

namespace App\Filament\Builder\Fields;

use Filament\Forms\Components\RichEditor;

class TextField
{
    public static function make(): RichEditor
    {
        return RichEditor::make('text_content')
            ->hiddenLabel()
            ->toolbarButtons([
                'bold',
                'italic',
                'link',
                'redo',
                'undo',
            ])
            ->default('<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.</p>');
    }
}
