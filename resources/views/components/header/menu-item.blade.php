<li
    x-data="{ isOpen: false }"
    x-bind:class="{ 'after:rotate-180': isOpen }"
    class="group list-none last:mb-0 {{ !empty($item['children']) ? 'menu-item-has-children' : '' }}"
>
    @php

        if ($item['type'] !== 'External') {
               $post = App::make($item['type'])->find($item['data']['url']);
               if ($post && $post['is_visible'] && $post['published_at'] <= now()) {
                   return $post->getPublicUrl();
               }
           }

           return $item['data']['url'];
    

    @endphp
    <a
        @if(!empty($item['children']))
            @click.prevent="isOpen = !isOpen"
        @endif
        class="text-foreground hover:text-foreground  py-2.5  inline-block  font-black anima-link default-link"
        href="{{ !empty($item['children']) ? '#' : $url }}"
    >
        {{ $item['data']['label'] }}
    </a>
    @if(!empty($item['children']))
        <x-header.menu
            x-show="isOpen"
            x-transition:enter="transition-height ease-in-out duration-300"
            x-transition:enter-start="max-h-0"
            x-transition:enter-end="max-h-[300px]"
            x-transition:leave="transition-height ease-in-out duration-300"
            x-transition:leave-start="max-h-[300px]"
            x-transition:leave-end="max-h-0"
            class="sub-menu overflow-hidden "
            :items="$item['children']"
        />
    @endif
</li>

