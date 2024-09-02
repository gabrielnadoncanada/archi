@props(['data', 'index'])

<div class="px-3 sm:px-0">
    <x-ui.outline-svg-text :text="$index" />
    <a href="{{ $data->getPublicUrl() }}" class="text-primary-foreground font-bold leading-135 md:text-4xl text-3xl hover-underline ">
        <span>{{ $data['title'] }}</span>
    </a>
    <p class="font-normal text-primary-foreground ">{{ $data['description'] }}</p>
</div>
