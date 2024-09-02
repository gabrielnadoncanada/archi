@props([
    'level' => 'h2',
    'size' => 'h2',
    'text' => null,
    'classes' => ''
])

@if($text)
    <x-text
        {{$attributes}}
        data-block="heading"
        :as="$level"
        :theme="$size">
        {{$text}}
    </x-text>
@endif
