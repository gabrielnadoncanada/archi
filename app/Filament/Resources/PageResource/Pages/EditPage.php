<?php

namespace App\Filament\Resources\PageResource\Pages;

use App\Filament\Resources\PageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Pboivin\FilamentPeek\Pages\Actions\PreviewAction;

class EditPage extends EditRecord
{
    use HasPagePreview;

    protected static string $resource = PageResource::class;

    //    protected function mutateFormDataBeforeSave(array $data): array
    //    {
    //        if (! empty($data['content'])) {
    //            $data['content']['content_section'] = static::updateHeadingLevels($data['content']['content_section']);
    //        }
    //
    //        return $data;
    //    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            PreviewAction::make()->label('Preview Changes'),
        ];
    }

    public static function updateHeadingLevels(&$content, $currentLevel = 1): array
    {
        foreach ($content as &$section) {
            if (isset($section['type']) && $section['type'] === 'banner') {
                $currentLevel = min(6, $currentLevel + 1);
                $section['data']['heading_level'] = 'h'.$currentLevel;
                $section['data']['heading_size'] = 'h'.$currentLevel;
            }

            if (isset($section['data']['blocks'])) {
                static::updateHeadingLevels($section['data']['blocks'], $currentLevel);
            } elseif (isset($section['data']['columns'])) {
                foreach ($section['data']['columns'] as &$column) {

                    if (isset($column['blocks'])) {
                        static::updateHeadingLevels($column['blocks'], $currentLevel);
                    }
                }
            }
        }

        return $content;
    }
}
