<?php

namespace App\Traits;

trait Themeable
{
    public $theme;

    public function theme($key = null)
    {
        $configKey = "blade-components.components.{$this->componentName}.themes.".($key ? $this->theme.'.'.$key : $this->theme);

        $configValue = config($configKey);

        if (is_array($configValue)) {
            if (array_key_exists('default', $configValue)) {
                return $configValue['default'];
            }
        }

        return $configValue;
    }
}
