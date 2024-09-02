<?php

namespace App\View\Components\Form;

class Input extends Control
{
    public $type;

    public function __construct($name, $id = null, $value = '', $bag = 'default', $disabled = false, $theme = 'default', $type = 'text')
    {
        parent::__construct($name, $id, $value, $bag, $disabled, $theme);

        $this->type = $type;
    }

    public function render()
    {
       
	    return $this->view('components.form.input');

    }
}
