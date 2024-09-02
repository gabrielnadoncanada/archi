@props([
    'textContent' => null,
    'classes' => '',
    'as' => 'div',
    'size' => 'default',
])

@if($textContent)
    <x-text
        data-block="text"
        :classes="$classes"
        :size="$size"
        :as="$as"
    >
        {!! $textContent !!}
    </x-text>
@endif
