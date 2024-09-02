<section class="pt-20">
    <div class="container-fluid">
        <x-ui.section-title
            :sectionName="$subtitle"
            :sectionTitle="$title"
            :sectionDesc="$description"
        />
    </div>
    <div class="container-fluid relative lg:pt-30 2sm:pt-20 pt-14">
        <x-ui.swiper
            :options="[
                'spaceBetween' => 30,
                'breakpoints' => [
                    0 => [
                        'slidesPerView' => 1
                    ],
                    700 => [
                        'slidesPerView' => 2
                    ],
                    1300 => [
                        'slidesPerView' => 3
                    ],
                ],
                'autoplay' => false,
                'pagination' =>  [
                    'clickable' => true,
                    'el' => '.progressbar-pagination',
                    'type' => 'progressbar'
                ],

                'loop' => true,
            ]"
        >
            <x-ui.swiper.wrapper>
                @foreach ($items as $item)
                    <x-ui.swiper.item>
                        <div class='flex md:gap-6 gap-2'>
                            <div class='text-secondary-foreground'>
                                <x-icons.quote/>
                            </div>
                            <div class='mt-16'>
                                <p class="text-lg text-primary-foreground ">{{$item['description']}}</p>
                                <div
                                    class='relative after:absolute after:-left-5 after:top-0 after:w-[1px] after:h-full after:bg-primary ml-5 mt-6'>
                                    <h5 class="text-primary-foreground font-extrabold leading-160 text-lg ">{{$item['author']}}</h5>
                                    <p class="text-primary-foreground font-medium ">{{$item['company']}}</p>
                                </div>
                            </div>
                        </div>
                    </x-ui.swiper.item>
                @endforeach

            </x-ui.swiper.wrapper>
            <div class="container">
                <x-ui.swiper.progress-and-navigation/>
            </div>
        </x-ui.swiper>
    </div>
</section>
