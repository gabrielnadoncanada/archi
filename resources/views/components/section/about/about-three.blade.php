@php
    $aboutList = [
        [
            'id' => "01",
            'item' => "Dream Forge",
            'item_desc' => "We begin in the Dream Forge, where your ideas take shape. It's a place where creativity and innovation converge, and the blueprint of your vision emerges."
        ],
        [
            'id' => "02",
            'item' => "Design Alchemy",
            'item_desc' => "Next, we venture into the realm of Design Alchemy. Here, ideas transform into design concepts, and we mix elements and inspiration like skilled alchemists."
        ],
        [
            'id' => "03",
            'item' => "Reality Craftsmanship",
            'item_desc' => "Finally, we step into the realm of Reality Craftsmanship. In this workshop, your dream becomes tangible, and our team of artisans and builders craft your space with precision and care."
        ],
    ];
@endphp

<section class="pt-20">
    <div class="container-fluid">
        <x-ui.section-title
            sectionName="About Us"
            sectionTitle="Our Artistic Journey"
            sectionDesc="Unveiling the Passion, Vision, and Expertise Behind Our Designs"
        />
        <div class="bg-primary 2xl:mt-[220px] lg:mt-25 md:mt-44 mt-[520px]">
            <div class="container">
                <div class="flex lg:flex-row flex-col items-center justify-between gap-[66px]">
                    <div class="2xl:-mt-25 md:mt-4 -mt-[470px]">
                        <x-ui.section-sidebar-img
                            img="{{ asset('images/about-image-2.jpg') }}"
                            section_name="about-bg"
                        />
                    </div>
                    <div class="max-w-[650px] lg:pb-0 pb-10">
                        <h2 class="text-secondary-foreground lg:text-5xl text-[40px] font-bold leading-120 max-w-[500px]">
                            Crafting Your Vision: Our Design Process</h2>
                        <ul class="pt-10">
                            @foreach ($aboutList as $item)
                                <li class="lg:flex gap-10 pb-10 last:pb-0 justify-between">
                                    <svg x-data x-intersect="inView = true" stroke-width="1"
                                         class="h-[65px] 2xl:w-20 w-[250px] relative -top-1 left-0 xl:text-6xl text-5xl mb-3 lg:mb-0 inline-block font-extrabold leading-120 fill-transparent stroke-secondary">
                                        <text x="0%" dominant-baseline="middle" y="70%">{{ $item['id'] }}</text>
                                        <template x-if="inView">
                                            <animate attributeName="stroke-dasharray" from="1000" to="0" dur="1s"
                                                     fill="freeze"/>
                                        </template>
                                    </svg>
                                    <div class="max-w-[520px]">
                                        <h4 class="text-3xl 2sm:text-4xl font-bold leading-135 text-secondary-foreground pb-1.5">{{ $item['item'] }}</h4>
                                        <p class="text-lg text-secondary-foreground font-normal">{{ $item['item_desc'] }}</p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
