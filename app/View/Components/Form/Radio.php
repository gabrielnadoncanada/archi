<?php

namespace App\View\Components\Form;

class Radio extends Control
{
    public $checked;

    public function __construct($name, $id = null, $value = '', $bag = 'default', $disabled = false, $theme = 'default', $checked = false)
    {
        parent::__construct($name, $id, $value, $bag, $disabled, $theme);
        $this->checked = $checked;
    }

    public function render()
    {
        return view('components.form.radio');
    }
}
