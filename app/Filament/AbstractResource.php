<?php

namespace App\Filament;

use Filament\Resources\Resource;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Lang;

abstract class AbstractResource extends Resource
{
//    protected static bool $hasTitleCaseModelLabel = false;


    protected static string $customRecordTitleAttribute = '';

    public static function getModelLabel(): string
    {
        $parentLabel = parent::getModelLabel();
        $translationKey = 'filament.models.' . $parentLabel;

        if (Lang::has($translationKey)) {
            return __($translationKey);
        } else {
            return $parentLabel;
        }
    }

    public static function getRecordTitle(?Model $record): string|Htmlable|null
    {
        if (! static::$customRecordTitleAttribute) {
            return parent::getRecordTitle($record);
        }

        $customRecordTitleAttribute = strtoupper(static::$customRecordTitleAttribute);

        return sprintf(
            '%s (%s)',
            $record?->getAttribute(
                get_class($record)::{$customRecordTitleAttribute}
            ), static::getModelLabel()
        );
    }
}
