@props([
    'href' => '',
])

<a {{$attributes->merge(['href' => $href])}}>{{$slot}}</a>
