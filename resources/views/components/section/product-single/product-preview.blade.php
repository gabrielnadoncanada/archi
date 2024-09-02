@props(['data'])

<section x-data="{ imageUrl: '{{ $data['image'] }}' }">
    <div>
        <img :src="imageUrl" loading="lazy" width="650" height="820" alt="lamp"
             class="max-h-[820px] h-full"/>
    </div>
    <div class="flex gap-5 mt-6">
        @foreach ($data['album'] as $index => $img)
            <img
                @click="imageUrl = '{{ $img }}'"
                src="{{ $img }}"
                alt="img_{{ $index }}"
                loading="lazy"
                width="120"
                height="120"
                class="max-w-[112px] w-full max-h-[112px] h-full cursor-pointer"
            />
        @endforeach
    </div>
</section>
