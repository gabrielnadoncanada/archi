<?php

namespace App\Filament\Resources\Product\PostResource\Pages;

use App\Filament\Blocks\BlockSection;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Component;
use Pboivin\FilamentPeek\Pages\Actions\PreviewAction;
use Pboivin\FilamentPeek\Pages\Concerns\HasBuilderPreview;
use Pboivin\FilamentPeek\Pages\Concerns\HasPreviewModal;

trait HasPostPreview
{
    use HasBuilderPreview;
    use HasPreviewModal;

    protected function getActions(): array
    {
        return [
            PreviewAction::make()->label('Preview Changes'),
        ];
    }

    protected function getPreviewModalView(): ?string
    {
        return 'templates.single';
    }

    public function updateBuilderFieldWithEditorData(string $builderName, array $editorData): void
    {
        $this->data['content'][$builderName] = $editorData['items'];
    }

    protected function mutateInitialBuilderEditorData(string $builderName, array $editorData): array
    {
        return ['items' => $editorData];
    }

    protected function prepareBuilderEditorData(string $builderName): array
    {
        if (array_key_exists($builderName, $this->data['content'])) {
            return $this->data['content'][$builderName];
        }

        return [];
    }

    protected function getBuilderPreviewView(string $builderName): ?string
    {
        return match ($builderName) {
            'content_section' => 'templates.preview.content-section',
        };
    }

    public static function getBuilderEditorSchema(string $builderName): Component|array
    {
        return match ($builderName) {
            'content_section' => Builder::make('items')
                ->blocks([
                    BlockSection::make(),
                ])
        };
    }
}
