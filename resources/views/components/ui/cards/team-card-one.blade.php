@props(['data'])

<div {{$attributes->merge(['class' => 'mb-16'])}}>
    <div class="relative group hover-underline">
        <div class="relative">
            <div
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 transition-all duration-500 group-hover:w-full group-hover:h-full group-hover:opacity-100 h-0 w-0 opacity-0 flex justify-center items-center bg-[#D2E0D9CC]">
                <ul class="flex items-center gap-7.5">
                    @if(!empty($data['social_link']))
                        @foreach ($data['social_link'] as $link)
                            <li>
                                <a href="{{ $link['slug'] }}"
                                   class="font-semibold text-lg relative after:contents-[''] after:absolute after:h-[20px] after:w-[1px] {{ $link['id'] == 4 ? 'after:bg-transparent' : 'after:bg-black' }} after:rotate-[22deg] after:top-1/2 after:-translate-y-1/2 after:right-[-15px] relative before:absolute before:bottom-0 before:left-0 before:w-0 hover:before:w-full before:h-[2px] before:bg-black before:transition-all before:duration-500">
                                    {{ $link['media'] }}
                                </a>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
            <img src="{{ Storage::url($data['image']) }}" loading="lazy" alt="{{ $data['title'] }}" class="w-full h-full"/>
        </div>
        <div
            class="bg-secondary absolute left-0 bottom-[-10%] min-w-[295px] transition-all duration-500 group-hover:min-w-full">
            <div>
                <span class="w-full h-[1px] bg-[#253B2F4D] block absolute top-2"></span>
                <span class="w-full h-[1px] bg-[#253B2F4D] block absolute bottom-2"></span>
                <span class="w-[1px] h-full bg-[#253B2F4D] block absolute left-2"></span>
                <span class="w-[1px] h-full bg-[#253B2F4D] block absolute right-2"></span>
            </div>
            <a href="/team-single" class="flex items-center justify-between px-[27px] pt-[9px] pb-[18px]">
                <label>
                    <span
                        class="text-2xl font-bold leading-160 text-primary-foreground cursor-pointer ">{{ $data['title'] }}</span>
                    <small class="text-primary-foreground text-lg block ">{{ $data['position'] }}</small>
                </label>
                <small
                    class="text-primary-foreground mt-2.5 flex items-center gap-3 transition-all duration-500 opacity-0 group-hover:opacity-100">
                    <x-icons.right-arrow width="35" height="21"/>
                </small>
            </a>
        </div>
    </div>
</div>
