<?php

namespace App\Filament\Fields;

use App\Models\Navigation;
use Filament\Forms;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Get;
use Illuminate\Support\Facades\Config;

class UrlSelectionField extends Forms\Components\Field
{
    protected string $view = 'filament-forms::components.group';

    public bool $hasLabel = true;

    public function hasLabel($hasLabel)
    {
        $this->hasLabel = $hasLabel;

        return $this;
    }

    public function getChildComponents(): array
    {
        $columns = 4;
        if ($this->getModel() === Navigation::class) {
            $columns = 1;
        }
        if (!$this->hasLabel) {
            $columns = 3;
        }

        return [
            Group::make()
                ->columns($columns)
                ->schema([
                    Select::make('type')
                        ->options($this->getTypeOptions())
                        ->afterStateUpdated(fn($state, Select $component) => $this->updateAfterState($component))
                        ->reactive()
                        ->default('External'),
                    $this->getDataGroup(),
                    TextInput::make('label')
                        ->required()
                        ->hidden(fn($state) => $this->hasLabel === false)
                        ->statePath('data.label')
                        ->default('Lorem ipsum'),
                    Select::make('target')
                        ->statePath('data.target')
                        ->options([
                            '' => __('filament.menu.select-options.same-tab'),
                            '_blank' => __('filament.menu.select-options.new-tab'),
                        ])
                        ->default('')
                        ->selectablePlaceholder(false),
                ]),
        ];
    }

    protected function getTypeOptions(): array
    {
        $itemTypes = $this->getItemTypes();

        return array_combine(array_keys($itemTypes), array_values($itemTypes));
    }

    protected function updateAfterState(Select $component): void
    {
        $component->getContainer()->getComponent(fn(Component $component) => $component instanceof Group)
            ?->getChildComponentContainer()
            ->fill();
    }

    protected function getDataGroup(): Group
    {
        return Group::make()
            ->schema(fn(Get $get) => [$this->getItemTypeFields($get('type') ?? 'External')]);
    }

    protected function getItemTypes(): array
    {
        return Config::get('filament-navigation.navigation_item_types', []);
    }

    protected function getItemTypeFields(string $type)
    {
        if ($type === 'External') {
            return TextInput::make('url')
                ->statePath('data.url')
                ->required()
                ->default('#');

        }

        $modelClass = $type;
        if (class_exists($modelClass)) {
            return Select::make('url')
                ->statePath('data.url')
                ->options($modelClass::pluck('title', 'id')->toArray())
                ->live()
                ->required();
        }

        return null;
    }
}
