@props(['data'])


<section class="relative banner-one">
    <x-ui.swiper
        :options="[
            'spaceBetween' => 0,
            'slidesPerView' => 1,
            'loop' => true,
            'speed' => 1500,
            'autoplay' => ['delay' => 4000],

        ]"
    >
        <x-ui.swiper.wrapper>
            @foreach ($data as $item)
                <x-ui.swiper.item key="{{ $item['id'] }}" class="relative">
                    <div class="bg-cover bg-no-repeat" style="background-image: url('{{ $item['banner_img'] }}')">
                        <div class="container">
                            <div class="xl:pt-[200px] pt-[150px] pb-[250px]">
                                <div>
                                    <h1 class="xl:text-[200px] lg:text-[170px] 2sm:text-[130px] sm:text-[100px] xm:text-7xl text-5xl leading-[100%] font-extrabold relative">
                                        <span
                                            class="text-primary-foreground animate-fill animate-bg ">{{ $item['heading_one'] }}</span>
                                        <svg stroke-width="2"
                                             class="stroke-primary fill-transparent stroke-dasharray-1000 stroke-dashoffset-1000 animate-text-line-animation w-full 2sm:h-[200px] h-25 text-animation">
                                            <text x="0%" dominant-baseline="middle"
                                                  y="70%">{{ $item['heading_two'] }}</text>
                                        </svg>
                                    </h1>
                                    <a href="/project-archive" class="mt-10 inline-block">
                                        <x-ui.buttons.button-fill class="after:z-[1] sm:px-10 px-4 after:left-0 ">
                                            <span class="relative z-10">Explore Our Portfolio</span>
                                        </x-ui.buttons.button-fill>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </x-ui.swiper.item>
            @endforeach
        </x-ui.swiper.wrapper>
        <div class="flex justify-between absolute right-0 bottom-0 z-40">
            <div
                class="hero-pagination bg-[rgba(210, 224, 217, 0.27)] backdrop-blur-md xl:px-9 xl:py-[61px] sm:px-5 px-2 py-10 max-w-[800px] flex xl:gap-8 gap-5">
                @foreach ($data as $index => $item)
                    <span class='flex leading-120' @click="goToSlide({{ $index }})"
                          :class="{'bullet-active': currentSlide === {{ $index }}}">
                     <span
                         class='inline-block mr-2 lg:text-5xl text-3xl font-extrabold text-transparent webkit-text-stroke-width-1 webkit-text-stroke-primary active-blut'>
                         0{{$index + 1}}
                     </span>
                     <span
                         class='title md:text-lg text-sm font-semibold text-primary-foreground hidden sm:block sm:max-w-56 max-w-48'>
                         {{$item['title']}}
                     </span>
                  </span>
                @endforeach
            </div>
            <div class="flex flex-col sm:w-[90px] min-w-17.5 xl:h-[181px] h-[136px]">
                <button x-ref="next"
                        class="bg-primary text-secondary-foreground flex justify-center items-center h-1/2">
                    <x-icons.right-arrow width="35" height="22"/>
                </button>
                <button x-ref="prev"
                        class="bg-secondary text-primary-foreground flex justify-center items-center h-1/2 rotate-180">
                    <x-icons.right-arrow width="35" height="22"/>
                </button>
            </div>
        </div>
    </x-ui.swiper>
</section>
