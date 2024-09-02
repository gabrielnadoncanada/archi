<?php

namespace App\View\Components\Form;

class Textarea extends Control
{
    public function __construct($name, $id = null, $value = '', $bag = 'default', $disabled = false, $theme = 'default')
    {
        parent::__construct($name, $id, $value, $bag, $disabled, $theme);
    }

    public function render()
    {
	    return $this->view('components.form.textarea');
	}
}
