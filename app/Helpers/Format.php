<?php

if (! function_exists('format_phone')) {
    function format_phone($value)
    {
        $value = preg_replace("/[^\d]/", '', $value);

        return '('.substr($value, 0, 3).') '.substr($value, 3, 3).'-'.substr($value, 6);
    }
}

if (! function_exists('clean_phone')) {
    function clean_phone($value)
    {
        return preg_replace("/[^\d]/", '', $value);
    }
}

if (! function_exists('format_with_article')) {
    function format_with_article($word)
    {
        return in_array(strtolower(substr($word, 0, 1)), ['a', 'e', 'i', 'o', 'u']) ? __('an ') : __('a ').$word;
    }
}
