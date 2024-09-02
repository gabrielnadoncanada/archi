@props(['img', 'sectionName'])
<x-ui.image {{ $attributes}}
    :src="$img" :alt="$sectionName" class="w-auto h-auto"></x-ui.image>
