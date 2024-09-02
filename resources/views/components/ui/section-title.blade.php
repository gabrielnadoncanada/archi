@props(['sectionName', 'sectionTitle', 'sectionDesc',  'link', 'button_text' => null])


<div id="containerRef" class="overflow-x-hidden">
    <h1 data-animated-text class="text-transparent webkit-text-stroke-width-1 webkit-text-stroke-primary opacity-20 xl:text-[324px] lg:text-[200px] md:text-[170px] sm:text-[140px] text-[100px] whitespace-nowrap font-extrabold leading-135">{{ $sectionName }}</h1>
</div>
<div class="container relative">
    <div
        class="xl:-mt-52 -mt-16 xl:ml-12.5 lg:ml-9 md:ml-7 ml-3 after:contents-[''] after:absolute after:left-[12px] after:top-0 after:w-[1px] after:h-full after:bg-primary">
        <h2 class="[font-size:_clamp(48px,7vw,130px)] font-extrabold leading-110 text-primary-foreground mb-5 ">
            {{$sectionTitle}}
        </h2>
        <span class="block w-[300px] h-[1px] bg-primary"></span>
        <div class="flex md:flex-row flex-col justify-between md:items-center">
            <h5 class="text-primary-foreground lg:text-[35px] sm:text-3xl text-2xl font-semibold mt-4 max-w-[690px] md:mb-0 mb-7 !leading-160 ">
                {{ $sectionDesc }}
            </h5>
            @if ($button_text)
                <a href="{{ $link }}">
                    <x-ui.buttons.button-outline class="2sm:px-10 px-3 after:left-0 ">
                        {{ $button_text }}
                        <x-icons.right-arrow height="22" width="35"/>
                    </x-ui.buttons.button-outline>
                </a>
            @endif
        </div>
    </div>
</div>
