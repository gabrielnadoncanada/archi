@props(['width' => '30', 'height' => '36'])

<svg {{ $attributes->merge([
    'width' => $width,
    'height' => $height,
    'viewBox' => '0 0 30 36',
    'fill' => 'currentColor',
    'xmlns' => 'http://www.w3.org/2000/svg'
]) }}>
    <path d="M0.500004 1.54552L29 18L0.500002 34.4545L0.500004 1.54552Z" stroke="#253B2F"></path>
</svg>
