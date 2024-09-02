@props([
    'src' => '',
    'alt' => '',
    'loading' => 'lazy'
])

<img {{$attributes->merge([
    'src' => $src,
    'alt' => $alt,
    'loading' => $loading
])}}>
