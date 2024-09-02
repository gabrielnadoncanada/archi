<ul class="flex items-center gap-7.5">
    @if(!empty(theme('social_links')))
        @foreach(theme('social_links') as $platform => $link)
            <li>
                <a href="{{ $link }}"
                   class="font-semibold text-lg relative after:content-[''] after:absolute after:h-[20px] after:w-[1px] after:bg-black after:top-1/2 after:-translate-y-1/2 after:right-[-15px] hover-underline">
                    <span>{{ strtoupper($platform) }}</span>
                </a>
            </li>
        @endforeach
    @endif
</ul>
