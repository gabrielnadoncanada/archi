<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;
use App\Traits\Themeable;

class Field extends Component
{
    use Themeable;

    public function __construct($theme = 'default')
    {
        $this->theme = $theme;
    }

    public function render()
    {
       
	    return $this->view('components.form.field');

	}
}
