@props(['data'])

<div class="flex lg:flex-row flex-col gap-[34px] items-center">
    <a href="{{ $data['slug'] }}" class="w-full h-full lg:min-w-52">
        <x-ui.section-sidebar-img :img="$data['image']" section_name="team" class="w-full h-full" />
    </a>
    <div>
        <a href="{{ $data['slug'] }}" class="text-2xl font-bold leading-160 text-primary-foreground hover-underline">
            <span>{{ $data['title'] }}</span>
        </a>
        <p class="font-bold text-primary-foreground">{{ $data['position'] }}</p>
        <p class="mt-[18px] text-primary-foreground">{{ $data['description'] }}</p>
    </div>
</div>
