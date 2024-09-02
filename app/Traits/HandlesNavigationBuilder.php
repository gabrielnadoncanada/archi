<?php

namespace App\Traits;

use App\Filament\Fields\UrlSelectionField;
use Closure;
use Filament\Actions\Action;
use Filament\Forms\ComponentContainer;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

trait HandlesNavigationBuilder
{
    public $mountedItem;

    public $mountedItemData = [];

    public $mountedChildTarget;

    protected array|Closure $extraFields = [];

    public function sortNavigation(string $targetStatePath, array $targetItemsStatePaths)
    {
        $items = [];

        foreach ($targetItemsStatePaths as $targetItemStatePath) {
            $item = data_get($this, $targetItemStatePath);
            $uuid = Str::afterLast($targetItemStatePath, '.');

            $items[$uuid] = $item;
        }

        data_set($this, $targetStatePath, $items);
    }

    public function addChild(string $statePath)
    {
        $this->mountedItem = null;
        $this->mountedChildTarget = $statePath;
        $this->mountAction('item');
    }

    public function removeItem(string $statePath)
    {
        $uuid = Str::afterLast($statePath, '.');

        $parentPath = Str::beforeLast($statePath, '.');
        $parent = data_get($this, $parentPath);

        data_set($this, $parentPath, Arr::except($parent, $uuid));
    }

    public function editItem(string $statePath)
    {
        $this->mountedItem = $statePath;
        $this->mountedItemData = Arr::except(data_get($this, $statePath), 'children');

        $this->mountAction('item');
    }

    public function createItem()
    {
        $this->mountedItem = null;
        $this->mountedItemData = [];
        $this->mountedActionData = [];

        $this->mountAction('item');
    }

    protected function addItem(array $data): void
    {
        $this->data['items'][(string) Str::uuid()] = array_merge($data, ['children' => []]);
    }

    protected function getActions(): array
    {
        return [
            Action::make('item')
                ->mountUsing(fn (ComponentContainer $form) => $this->initializeForm($form))
                ->view('filament.forms.components.hidden-action')
                ->form([
                    UrlSelectionField::make(''),
                ])
                ->modalWidth('md')
                ->action(fn (array $data) => $this->handleAction($data))
                ->modalSubmitActionLabel(__('filament.menu.items-modal.btn'))
                ->label(__('filament.menu.items-modal.title')),
        ];
    }

    protected function initializeForm(ComponentContainer $form): void
    {
        if ($this->mountedItem) {
            $form->fill($this->mountedItemData);
        }
    }

    protected function handleAction(array $data): void
    {
        if ($this->mountedItem) {
            $this->updateMountedItem($data);
        } elseif ($this->mountedChildTarget) {
            $this->updateMountedChildTarget($data);
        } else {
            $this->addItem($data);
        }

        $this->mountedActionData = [];
    }

    protected function updateMountedItem(array $data): void
    {
        data_set($this, $this->mountedItem, array_merge(data_get($this, $this->mountedItem), $data));
        $this->mountedItem = null;
        $this->mountedItemData = [];
    }

    protected function updateMountedChildTarget(array $data): void
    {
        $children = data_get($this, $this->mountedChildTarget.'.children', []);
        $children[(string) Str::uuid()] = array_merge($data, ['children' => []]);
        data_set($this, $this->mountedChildTarget.'.children', $children);
        $this->mountedChildTarget = null;
    }
}
