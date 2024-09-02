@props(['text'])

<div x-data="Components.textTyped({ text: {{ json_encode($text) }} })">
    <span x-ref="typedText"></span>
</div>
