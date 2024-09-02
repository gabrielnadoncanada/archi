@props(['servicesData' => []])


<div class="sticky top-16">
    <div>
        <x-ui.title title_text="All Services" />
        <ul>
            @foreach ($servicesData as $service)
                <li class="text-primary-foreground flex items-center gap-[27px] mb-[22px] last:mb-0">
                    <x-icons.right-arrow width="35" height="22" />
                    <a href="{{ $service['link'] }}" class="text-xl leading-160 inline-block relative after:absolute after:left-0 after:bottom-0 after:w-0 after:h-[1px] after:bg-primary after:transition-all after:duration-500 hover:after:w-full">
                        <span class="font-medium text-primary-foreground">{{ $service['name'] }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="mt-17.5">
        <x-ui.title title_text="Search" />
        <x-ui.input-field placeholder="Type & Hit Enter" type="text" />
    </div>
    <div class="mt-17.5">
        <form action="">
            <x-ui.title title_text="Schedule a Call" />
            <x-ui.input-field placeholder="Your Name" type="text" class="mb-[15px]" />
            <x-ui.input-field placeholder="Phone Number" type="number" class="mb-[15px]" />
            <x-ui.input-field placeholder="Phone Number" type="date" class="mb-[15px]" />
            <x-ui.text-area-field placeholder="Your message" class="min-h-[187px]" />
            <x-ui.buttons.button-fill type="submit" class="sm:px-7.5 sm:py-2.5">Send message</x-ui.buttons.button-fill>
        </form>
    </div>
</div>
