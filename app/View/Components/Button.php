<?php

namespace App\View\Components;

use App\Traits\Themeable;
use Illuminate\View\Component;

class Button extends Component
{
    use Themeable;

    public $href;
    public $newTab;

    public function __construct($href = null, $theme = 'default')
    {
        $this->href = $href;
        $this->theme = $theme;
    }

    public function render()
    {
        return view('components.button');
    }
}
