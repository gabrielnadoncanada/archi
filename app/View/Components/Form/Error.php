<?php

namespace App\View\Components\Form;

use Illuminate\Support\ViewErrorBag;
use Illuminate\View\Component;
use App\Traits\Themeable;

class Error extends Component
{
    use Themeable;

    public $id;
    public $for;
    public $value;
    public $bag;

    public function __construct($for, $value = null, $bag = 'default', $theme = 'default')
    {
        $this->id = $for;
        $this->for = trim(str_replace(['[', ']'], ['.', ''], $for), '.');
        $this->value = $value;
        $this->bag = $bag;
        $this->theme = $theme;
    }

    public function render()
    {
	    return $this->view('components.form.error');

    }

    public function messages(ViewErrorBag $errors)
    {
        $bag = $errors->getBag($this->bag);

        return $bag->has($this->field) ? $bag->get($this->field) : [];
    }
}
