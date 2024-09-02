@props(['dropDownList', 'parentId'])

<div class="absolute z-50 left-1/2 -translate-x-1/2 bg-primary flex max-w-[1320px] w-full transition-all duration-500 max-h-0 overflow-hidden group-hover:max-h-[370px]">
    @foreach ($dropDownList as $dropDown)
        <ul class="w-full relative after:absolute after:top-0 after:-right-1 after:contents-[''] after:bg-primary_rgba last:after:bg-transparent after:w-[2px] after:h-full">
            @foreach ($dropDown['menus'] as $menu)
                <li>
                    @if (isset($menu['img']))
                        <div class="relative">
                            <img src="{{ $menu['img'] }}" alt="{{ $menu['name'] }}" loading="lazy" class="w-full h-full" />
                            <p class="text-secondary-foreground text-[34px] font-extrabold leading-[134%] absolute top-6 left-6">{{ $menu['name'] }}</p>
                            <a href="{{ $menu['path'] }}">
                                <x-ui.buttons.button-fill class="absolute bottom-4 left-6 w-[83%] after:bg-secondary border-secondary text-primary-foreground right-0 hover:text-secondary-foreground">
                                    {{ $menu['desc'] }} <x-icons.right-arrow width="35" height="22" />
                                </x-ui.buttons.button-fill>
                            </a>
                        </div>
                    @else
                        <div class="px-6 pt-7.5">
                            <a href="{{ $menu['path'] }}" data-id="{{ $parentId }}" class="dropdown-item text-secondary-foreground text-lg font-bold inline-block relative after:transition-all after:duration-700 after:absolute after:left-0 after:bottom-0 after:contents-[''] after:w-0 after:h-[2px] after:bg-secondary hover:after:w-full">
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
