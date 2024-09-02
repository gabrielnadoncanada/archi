@props(['dropDownList', 'bgColor' => '' , 'parentId'])

<div class="absolute z-50 bg-primary flex max-h-0 py-0 overflow-hidden transition-all duration-500 group-hover:max-h-[300px] group-hover:py-5 {{ $bgColor}}">
    <ul class="min-w-60 px-6">
        @foreach (array_slice($dropDownList,0, 6) as $item)
            <li class="leading-10">
                <a href="{{ $item['path'] }}" data-id="{{ $parentId }}" class="dropdown-item text-secondary-foreground text-xl font-medium inline-block relative after:transition-all after:duration-700 after:absolute after:left-0 after:bottom-0 after:contents-[''] after:w-0 after:h-[2px] after:bg-secondary hover:after:w-full">
                    {{ $item['name'] }}
                </a>
            </li>
        @endforeach
    </ul>

    @if (count($dropDownList) > 6)
        <ul class="min-w-52 px-6 relative after:absolute after:top-0 after:-left-5 after:contents-[''] after:bg-primary_rgba after:w-[2px] after:h-full">
            @foreach (array_slice($dropDownList, 6, 11) as $item)
                <li class="leading-10">
                    <a href="{{ $item['path'] }}" data-id="{{ $parentId }}" class="dropdown-item text-secondary-foreground text-xl font-medium inline-block relative after:transition-all after:duration-700 after:absolute after:left-0 after:bottom-0 after:contents-[''] after:w-0 after:h-[2px] after:bg-secondary hover:after:w-full">
                        {{ $item['name'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    @endif
</div>
