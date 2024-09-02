@php
    $projectImg = [
        ['id' => 1, 'img' => asset('images/project-gallery-1.jpg')],
        ['id' => 2, 'img' => asset('images/project-gallery-2.jpg')],
        ['id' => 3, 'img' => asset('images/project-gallery-3.jpg')],
        ['id' => 4, 'img' => asset('images/project-gallery-4.jpg')],
        ['id' => 5, 'img' => asset('images/project-gallery-5.jpg')],
        ['id' => 6, 'img' => asset('images/project-gallery-6.jpg')],
        ['id' => 7, 'img' => asset('images/project-gallery-1.jpg')],
        ['id' => 8, 'img' => asset('images/project-gallery-2.jpg')],
        ['id' => 9, 'img' => asset('images/project-gallery-3.jpg')],
    ];
@endphp

<section class="container">
    <x-ui.swiper
        thumbsSlider=""
        id="mainSwiper"
        :options="[
            'loop' => true,
            'freeMode' => true,
            'watchSlidesProgress' => true,
            'spaceBetween' => 27,
            'speed' => 500,
            'breakpoints' => [
                '300' => ['slidesPerView' => 2, 'spaceBetween' => 10],
                '750' => ['slidesPerView' => 3, 'spaceBetween' => 20],
                '1320' => ['slidesPerView' => 3, 'spaceBetween' => 30],
            ],

        ]"
        class="mt-[35px]"
    >
        <x-ui.swiper.wrapper>
            @foreach ($projectImg as $project)
                <x-ui.swiper.item key="{{ $project['id'] }}">
                    <img src="{{ $project['img'] }}" loading="lazy" alt="img"
                         class="w-full lg:min-h-[250px] min-h-[100px] max-h-[100px] h-full"/>
                </x-ui.swiper.item>
            @endforeach
        </x-ui.swiper.wrapper>
    </x-ui.swiper>
    <x-ui.swiper

        :options="[
            'spaceBetween' => 30,
            'slidesPerView' => 1,

            'pagination' => [
                'clickable' => true,
                'el' => '.progressbar-pagination',
                'type' => 'progressbar'
            ],

            'loop' => true,
            'thumbs' => ['swiper' => 'mainSwiper']

        ]"
    >
        <x-ui.swiper.wrapper>
            @foreach ($projectImg as $project)
                <x-ui.swiper.item key="{{ $project['id'] }}">
                    <img src="{{ $project['img'] }}" loading="lazy" alt="img" class="w-full h-full max-h-[720px]"/>
                </x-ui.swiper.item>
            @endforeach
            <div class="absolute top-1/2 -translate-y-1/2 z-10 w-full flex justify-between items-center gap-5">
                <div @click="swiperRef?.slidePrev()">
                    <x-ui.buttons.button-fill
                        class="rotate-180 2sm:h-[90px] h-10 2sm:w-[90px] w-10 2sm:px-6 px-1.5 after:bg-secondary border-secondary hover:border-primary text-primary-foreground hover:text-secondary-foreground hover:bg-primary">
                        <x-icons.right-arrow width="35" height="22"/>
                    </x-ui.buttons.button-fill>
                </div>
                <div @click="swiperRef?.slideNext()">
                    <x-ui.buttons.button-fill
                        class="2sm:h-[90px] h-10 2sm:w-[90px] w-10 2sm:px-6 px-1.5 border-secondary hover:border-primary after:bg-secondary text-primary-foreground hover:text-secondary-foreground hover:bg-primary">
                        <x-icons.right-arrow width="35" height="22"/>
                    </x-ui.buttons.button-fill>
                </div>
            </div>
            <div class="container">
                <x-ui.swiper.progress-and-navigation/>
            </div>
        </x-ui.swiper.wrapper>
    </x-ui.swiper>


</section>
