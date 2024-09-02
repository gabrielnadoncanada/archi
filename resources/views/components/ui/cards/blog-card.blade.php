@props(['data'])

<a href="{{$data->getPublicUrl()}}" class="hover-underline">
    <img src="{{ Storage::url($data['image']) }}" loading="lazy" alt="{{ $data['title'] }}" class="w-full h-auto aspect-video object-cover" />
    <div class="mt-8">
        <p class="text-primary-foreground flex items-center gap-2 mb-2.5">
            <small class="text-lg">{{ $data['published_at'] }}</small> / <small class="text-lg">{{ $data->categories->first()->title }}</small>
        </p>
        <span class="text-primary-foreground font-semibold text-2xl ">{{ $data['title'] }}</span>
    </div>
</a>

