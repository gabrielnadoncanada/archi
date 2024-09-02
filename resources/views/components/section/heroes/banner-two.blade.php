@php
    $bannerData = [
        [
            'id' => 1,
            'title' => 'Elegant Design Showcase',
            'heading' => '<span class="text-primary-foreground"> Elegance </span> <span class="outline-text"> Redefined </span>',
            'banner_img' => asset('images/hero-8.jpg'),
        ],
        [
            'id' => 2,
            'title' => 'Designing Interior Elegance',
            'heading' => '<span class="text-primary-foreground"> Elegance </span> <span class="outline-text"> Redefined </span>',
            'banner_img' => asset('images/hero-2.jpg'),
        ],
        [
            'id' => 3,
            'title' => 'Crafting Interior Brilliance',
            'heading' => '<span class="text-primary-foreground"> Elegance </span> <span class="outline-text"> Redefined </span>',
            'banner_img' => asset('images/hero-3.jpg'),
        ],
    ];

    $bannerBottomContent = [
        [
            'id' => 1,
            'banner_img' => asset('images/hero-5.jpg'),
            'title' => 'Space Alchemy',
        ],
        [
            'id' => 2,
            'banner_img' => asset('images/hero-6.jpg'),
            'title' => 'Design Symphony',
        ],
        [
            'id' => 3,
            'banner_img' => asset('images/hero-7.jpg'),
            'title' => 'Personalized Elegance',
        ],
    ];
@endphp

<section class="banner-two">
    <div class="grid grid-cols-2">
        <!-- Banner left side -->
        <div class="bg-primary pt-[136px] pb-[148px] bg-cover bg-no-repeat bg-right" style="background-image: url('{{ asset('images/hero-vector-bg.png') }}')">
            <div class="z-10 relative px-3 md:px-0">
                <div class="hero-pagination flex"></div>
                <div class="flex flex-col lg:flex-row lg:items-end justify-end gap-5 xl:pr-10 pr-3 lg:mt-10 mt-5">
                    <a href="/about-us" class="mt-10 inline-block">
                        <x-ui.buttons.button-outline class="px-[35px] sm:py-2.5 py-2.5 border-secondary text-secondary-foreground after:bg-secondary hover:text-primary after:left-0">
                            <span class="text-base">Who we are</span>
                        </x-ui.buttons.button-outline>
                    </a>
                    <a href="/project-archive" class="lg:mt-10 mt-2 inline-block">
                        <x-ui.buttons.button-fill class="px-[35px] sm:py-2.5 py-2.5 after:bg-secondary text-primary-foreground border-secondary hover:text-secondary-foreground">
                            <span class="text-base">View Projects</span>
                        </x-ui.buttons.button-fill>
                    </a>
                </div>
            </div>
        </div>
        <!-- Banner right side -->
        <div>
            <x-ui.swiper
                :options="[
                    'spaceBetween' => 0,
                    'slidesPerView' => 1,
                    'pagination' => [
                        'clickable' => true,
                        'el' => '.hero-pagination',

                    ],
                    'loop' => true,
                    'speed' => 1500,
                    'autoplay' => ['delay' => 4000],

                ]"
                class="h-full"
            >
                <x-ui.swiper.wrapper>
                    @foreach ($bannerData as $item)
                        <x-ui.swiper.item key="{{ $item['id'] }}" class="relative">
                            <img src="{{ $item['banner_img'] }}" loading="lazy" width="auto" height="auto" alt="bg image" class="h-full object-cover" />
                        </x-ui.swiper.item>
                    @endforeach
                </x-ui.swiper.wrapper>
                <div class="flex justify-between absolute right-0 bottom-0 z-40">
                    <!-- Next and prev arrow -->
                    <div class="flex flex-col sm:w-[90px] w-[70px] xl:h-[181px] h-[136px]">
                        <button @click="swiperRef?.slideNext()" class="bg-primary text-secondary-foreground flex justify-center items-center h-1/2">
                            <x-icons.right-arrow width="35" height="22" />
                        </button>
                        <button @click="swiperRef?.slidePrev()" class="bg-secondary text-primary-foreground flex justify-center items-center h-1/2 rotate-180">
                            <x-icons.right-arrow width="35" height="22" />
                        </button>
                    </div>
                </div>
            </x-ui.swiper>
        </div>
    </div>
    <!-- Banner bottom -->
    <div class="grid lg:grid-cols-3 2sm:grid-cols-2">
        @foreach ($bannerBottomContent as $content)
            <div class="relative overflow-hidden after:contents-[''] after:absolute after:bottom-0 after:left-0 after:w-full after:h-full after:bg-overlay">
                <img src="{{ $content['banner_img'] }}" loading="lazy" alt="banner-bottom-bg" width="780" height="408" />
                <h4 class="text-background 2xl:text-[82px] md:text-6xl text-5xl leading-120 font-extrabold absolute xl:left-12.5 md:left-9 sm:left-7 left-3 top-1/2 -translate-y-1/2 z-10">
                    {{ $content['title'] }}
                </h4>
            </div>
        @endforeach
    </div>
</section>
