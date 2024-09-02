@props(['dropDownList'])

<div class="absolute z-50 left-1/2 -translate-x-1/2 bg-muted flex max-w-[670px] w-full transition-all duration-500 max-h-0 overflow-hidden group-hover:max-h-[450px]">
    <div class="flex justify-between flex-wrap">
        @foreach ($dropDownList as $dropDown)
            <ul class="w-1/2 last:w-full relative after:absolute after:top-0 after:right-0 after:contents-[''] after:bg-primary_rgba after:w-[2px] after:h-full">
                @foreach ($dropDown['menus'] as $menu)
                    <li>
                        @if (isset($menu['img']))
                            <div class="relative mt-12.5">
                                <img src="{{ $menu['img'] }}" alt="{{ $menu['name'] }}" loading="lazy" class="w-full h-full" />
                                <div class="w-full h-full flex justify-between items-center absolute top-0 px-[25px]">
                                    <p class="text-secondary-foreground text-2xl font-extrabold leading-[123%] max-w-[265px]">{{ $menu['name'] }}</p>
                                    <a href="{{ $menu['path'] }}">
                                        <x-ui.buttons.button-fill class="after:bg-secondary border-secondary text-primary-foreground hover:text-secondary-foreground">
                                            {{ $menu['desc'] }}
                                        </x-ui.buttons.button-fill>
                                    </a>
                                </div>
                            </div>
                        @else
                            <div class="px-6 pt-7.5">
                                <a href="{{ $menu['path'] }}" class="text-secondary-foreground text-lg font-bold inline-block relative after:transition-all after:duration-700 after:absolute after:left-0 after:bottom-0 after:contents-[''] after:w-0 after:h-[2px] after:bg-secondary hover:after:w-full">
                                    {{ $menu['name'] }}
                                </a>
                                <span class="block text-secondary_rgba text-sm">{{ $menu['desc'] }}</span>
                            </div>
                        @endif
                    </li>
                @endforeach
            </ul>
        @endforeach
    </div>
</div>
