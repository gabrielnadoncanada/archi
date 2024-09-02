@props(['width' => '35px', 'height' => '22px'])


<svg {{$attributes->merge([
    'width' => $width,
    'height' => $height,
    'viewBox' => '0 0 35 22',
    'fill' => 'currentColor',
    'xmlns' => 'http://www.w3.org/2000/svg'
])}}>
    <path fill-rule="evenodd" clip-rule="evenodd"
          d="M24 0.585815L34.4142 10.9999L24 21.4142L22.5858 20L30.5857 12L0 12L2.38419e-07 10L30.5858 10L22.5858 2.00003L24 0.585815Z"/>
</svg>
