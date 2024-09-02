<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum PublishedStatus: string implements HasColor, HasLabel
{
    case DRAFT = 'draft';

    case PUBLISHED = 'published';

    public function getLabel(): string
    {
        return match ($this) {
            self::DRAFT => __('filament.posts.status.draft'),
            self::PUBLISHED => __('filament.posts.status.published'),
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::DRAFT => 'warning',
            self::PUBLISHED => 'success',

        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
