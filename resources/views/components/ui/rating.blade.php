@props(['star'])

<ul class="flex">
    @foreach(range(1, 5) as $number)
        @if ($star >= $number)
            <li><x-dynamic-component component="icons.star-sharp" class="text-primary-foreground cursor-pointer" /></li>
        @elseif ($star >= $number - 0.5)
            <li><x-dynamic-component component="icons.star-half" class="text-primary-foreground cursor-pointer" /></li>
        @else
            <li><x-dynamic-component component="icons.star-outline" class="text-primary-foreground cursor-pointer" /></li>
        @endif
    @endforeach
</ul>
