<?php

namespace Devlense\FilamentBuilder\Components;

use Filament\Forms\Components\Group;

class Content
{
    public static function make(): Group
    {
        return Group::make(function ($record) {
            if (! $record) {
                return [];
            }

            $contentSchema = $record->template()::schema();

            return [
                Group::make($contentSchema)
                    ->columnSpanFull()
                    ->afterStateHydrated(function ($component, $state) {
                        $component->getChildComponentContainer()->fill($state);
                    })
                    ->statePath('content'),
            ];
        })->relationship('builder');
    }
}
