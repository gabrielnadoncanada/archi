<div class="accordion-item border-0 mb-2.5 group" data-index="{{$index}}" :data-state="activeItem === {{ $index }} ? 'open' : 'closed'">
    <h3 class="flex">
        <button type="button" @click="toggleItem({{ $index }})"
                class="flex flex-1 items-center justify-between py-5 text-start transition-all text-xl font-semibold border border-primary sm:px-12.5 px-6  ">
            {{ $item['title'] }}
            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"
                 class="h-6 w-6 shrink-0 text-muted-foreground transition-transform duration-200 group-data-[state=open]:rotate-45">
                <path
                    d="M8 2.75C8 2.47386 7.77614 2.25 7.5 2.25C7.22386 2.25 7 2.47386 7 2.75V7H2.75C2.47386 7 2.25 7.22386 2.25 7.5C2.25 7.77614 2.47386 8 2.75 8H7V12.25C7 12.5261 7.22386 12.75 7.5 12.75C7.77614 12.75 8 12.5261 8 12.25V8H12.25C12.5261 8 12.75 7.77614 12.75 7.5C12.75 7.22386 12.5261 7 12.25 7H8V2.75Z"
                    fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
            </svg>
        </button>
    </h3>
    <div class="accordion-content overflow-hidden transition-all group-data-[state=closed]:animate-accordion-up group-data-[state=open]:animate-accordion-down"
         style="max-height: 0;">
        <div class="pb-4 pt-0 mt-[22px] sm:px-12.5 px-6">
            {{ $item['content'] }}
        </div>
    </div>
</div>
