@php
    use Illuminate\Support\Facades\Storage;
@endphp

@props([
    'desktop_image' => null,
    'mobile_image' => null,
    'alt' => '',
    'placeholder' => false,
    'classes' => ''
])

@php
    $desktop_image = $desktop_image ? Storage::url($desktop_image) : null;
    $mobile_image = $mobile_image ? Storage::url($mobile_image) : $desktop_image;

    if ($placeholder && !$desktop_image && !$mobile_image) {
        $desktop_image = $mobile_image = '/img/placeholder.png';
    }

    if (!$desktop_image && $mobile_image) {
        $desktop_image = $mobile_image;
    }
@endphp

@if($desktop_image)
    <picture>
        <source media="(max-width: 768px)" srcset="{{ $mobile_image }}">
        <source media="(min-width: 769px)" srcset="{{ $desktop_image }}">
        <img
            {{ $attributes->class(['image object-cover', $classes]) }}
            src="{{ $desktop_image }}"
            alt="{{ $alt }}"
            data-block="image">
    </picture>
@endif
