@props(['data'])
<div class="w-full h-full hover-underline">
    <a href="{{ $data['slug']}}">
        <img src="{{ $data['image']}}" loading="lazy" alt="team-img" />
    </a>
    <div class="mt-7.5">
        <a href="{{ $data['slug'] }}" class="text-2xl font-bold leading-160 text-primary-foreground">
            <span>{{ $data['title'] }}</span>
        </a>
        <p class="text-primary-foreground">{{ $data['position']}}</p>
    </div>
</div>
