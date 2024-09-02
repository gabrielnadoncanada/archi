<?php

namespace App\View\Components;

use App\Traits\Themeable;
use Illuminate\View\Component;

class Menu extends Component
{
    use Themeable;

    public array $items;

    public function __construct(array $items, $theme = 'default')
    {
        $this->items = $items;
        $this->theme = $theme;
    }

    public function resolveUrl(array $item): string
    {
        if ($item['type'] !== 'External') {
            $record = app($item['type'])->find($item['data']['url']);
            if ($record && $record['is_visible'] && $record['published_at'] <= now()) {
                return $record->getPublicUrl();
            }
        }

        return $item['data']['url'];
    }

    public function render()
    {
        return view('components.menu');
    }
}
