<section class="pt-20">
    <div class="container-fluid">
        <x-ui.section-title
            :sectionName="$subtitle"
            :sectionTitle="$title"
            :sectionDesc="$description"
        />
        <div class="bg-primary xl:mt-[220px] lg:mt-25 md:mt-44 mt-[540px] xl:mb-20 mb-0 ">
            <div class="container">
                <div class="flex lg:flex-row flex-col items-center gap-[66px]">
                    <x-ui.section-sidebar-img
                        img="{{ Storage::url($image) }}"
                        section_name="about-bg"
                        class="md:-mt-25 -mt-[470px] -mb-25"/>

                    <ul class="lg:mt-0 mt-20 lg:pb-0 pb-10">
                        @foreach ($items as $key => $item)
                            <li class="lg:flex gap-10 pb-10 last:pb-0 justify-between">
                                <h3 class="group-hover:webkit-text-stroke-primary text-6xl font-extrabold leading-120 transition-all duration-700 text-transparent webkit-text-stroke-width-1 webkit-text-stroke-white">
                                    {{ $key < 9 ? '0' : '' }}{{ $key + 1 }}
                                </h3>

                                <div class="max-w-[534px]">
                                    <h4 class="text-3xl 2sm:text-4xl font-bold leading-135 text-secondary-foreground">{{ $item['title'] }}</h4>
                                    <p class="text-lg text-secondary-foreground font-normal">{{ $item['description'] }}</p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
