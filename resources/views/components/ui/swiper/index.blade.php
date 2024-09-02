@props([
    'options' => [],
])

<div
    x-data="Components.swiper({{json_encode($options)}})"
    {{$attributes}}
>
    <div class="swiper-container overflow-hidden" x-ref="container">
        {{$slot}}
    </div>
</div>
