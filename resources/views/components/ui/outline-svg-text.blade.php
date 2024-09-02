@props(['text'])

<svg x-data="{ inView: false }" x-intersect:enter="inView = true" stroke-width="1"
     class="text-transparent webkit-text-stroke-width-1 webkit-text-stroke-primary [font-size:_clamp(48px,13vw,130px)] font-extrabold leading-120 max-h-25 sm:max-h-28 lg:max-h-full "
     :class="inView ? 'stroke-primary stroke-dasharray-1000 stroke-dashoffset-1000 animate-text-line-animation' : 'fill-transparent stroke-primary'">
    <text x="0%" dominant-baseline="middle" y="70%">{{ $text }}</text>
</svg>
