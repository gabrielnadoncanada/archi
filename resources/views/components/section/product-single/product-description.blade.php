@php
    $initialTabs = ["Description", "Product Details", "Reviews"];
@endphp

<section class="mt-30">
    <div x-data="{ activeTab: '{{ $initialTabs[0] }}' }">
        <ul class="flex xm:flex-wrap gap-5 justify-between mb-2.5">
            @foreach ($initialTabs as $index => $item)
                <li
                    @click="activeTab = '{{ $item }}'"
                    class="relative xl:text-4xl md:text-3xl sm:text-2xl font-bold leading-135 cursor-pointer"
                >
                    <span
                        x-show="activeTab === '{{ $item }}'"
                        class="absolute inset-0 -bottom-[13px] z-10 border-b-[5px] border-b-primary"
                    ></span>
                    {{ $item }}
                </li>
            @endforeach
        </ul>
        <hr/>
        <div class="mt-7.5 max-w-[958px] w-full relative overflow-hidden">
            <div x-show="activeTab === 'Description'"
                 class="relative opacity-100 translate-y-0 transition-all duration-500 bg-background">
                <p>The Ratio Pendant Lamp features a wide lampshade, referring the bold and elegant shape of classic
                    metal pendants. The lamp features a spun steel shade with a seamlessly embedded LED module. The
                    Ratio Pendant Lamp features a wide lampshade, referring the bold and elegant shape of classic metal
                    pendants. The lamp features a spun steel shade with a seamlessly embedded LED module.</p>
                <p class="mt-6">The Ratio Pendant Lamp features a wide lampshade, referring the bold and elegant shape
                    of classic metal pendants. The lamp features a spun steel shade with.</p>
            </div>
            <div x-show="activeTab === 'Product Details'"
                 class="relative opacity-100 translate-y-0 transition-all duration-500 bg-background">
                <p>The Ratio Pendant Lamp features a wide lampshade, referring the bold and elegant shape of classic
                    metal pendants. The lamp features a spun steel shade with.</p>
                <p class="mt-6">The Ratio Pendant Lamp features a wide lampshade, referring the bold and elegant shape
                    of classic metal pendants. The lamp features a spun steel shade with a seamlessly embedded LED
                    module. The Ratio Pendant Lamp features a wide lampshade, referring the bold and elegant shape of
                    classic metal pendants. The lamp features a spun steel shade with a seamlessly embedded LED
                    module.</p>
            </div>
            <div x-show="activeTab === 'Reviews'"
                 class="relative opacity-100 translate-y-0 transition-all duration-500 bg-background">
                <form>
                    <x-ui.input-field placeholder="Your Name" type="text" class="mb-[13px]"/>
                    <div class="flex sm:flex-row flex-col gap-x-5">
                        <x-ui.input-field placeholder="Phone Number" type="number" class="mb-[13px]"/>
                        <x-ui.input-field placeholder="Your Email" type="email" class="mb-[13px]"/>
                    </div>
                    <x-ui.text-area-field placeholder="Type your message" class="min-h-[223px]"/>
                    <div class="flex justify-end">
                        <x-ui.buttons.button-outline>
                            Send message
                            <x-icons.right-arrow height="22" width="35"/>
                        </x-ui.buttons.button-outline>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
