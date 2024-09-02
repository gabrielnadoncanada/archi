<div x-data="Components.scrollCircle()"  @scroll.window="handleScroll()"
     @click="scrollToTop()"
     :class="showBackToTop ? 'block' : 'hidden'"
     class="fixed bottom-5 right-5 z-20 bg-primary rounded-full cursor-pointer shadow-[rgba(13,_38,_76,_0.19)_0px_9px_20px]"
>
    <svg
        class="sm:w-16 sm:h-16 w-14 h-14"
        width="100%"
        height="100%"
        viewBox="-1 -1 102 102"
        stroke="white"
        stroke-width="5"
        fill="none"
        stroke-linecap="round"
        stroke-linejoin="round"
    >
        <path
            d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
            :style="`stroke-dasharray: 307.919, 307.919; stroke-dashoffset: ${307.919 - (scrollPercentage * 307.919) / 100}`"
        ></path>
    </svg>
    <span class="text-white absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
        <x-icons.right-arrow class="w-[36px] -rotate-90"></x-icons.right-arrow>
    </span>
</div>
