@props(['data'])


<section class="pt-20">
    <div class="container-fluid">
        <x-ui.section-title
            sectionName="Projects"
            sectionTitle="Creative Showcase"
            sectionDesc="Where Imagination Meets Reality in Every Frame"
            button_text="All Projects"
            link="/project-archive"
        />
    </div>
    <div class="container-fluid relative lg:pt-30 2sm:pt-20 pt-14">
        <x-ui.swiper
            :options="[
                'slidesPerView' => 1,
                'autoplay' => [
                    'delay' => 4000
                ],
                'pagination' =>  [
                    'clickable' => true,
                    'el' => '.project-pagination',

                ],
                'speed' => 500,
                'loop' => true,
            ]"
        >
            <x-ui.swiper.wrapper>
                @foreach ($data as $item)
                    <x-ui.swiper.item key="{{ $item['id'] }}">
                        <div
                            class="bg-cover bg-no-repeat pb-[70px] lg:pt-[758px] pt-[500px] max-w-[1550px] after:contents-[''] after:absolute after:top-0 after:right-0 after:w-full after:h-full after:bg-bottom-liner after:z-[1] after:max-w-[1550px] ml-auto"
                            style="background-image: url('{{ $item['project_img'] }}')">
                            <div
                                class="flex xl:justify-end justify-center -mt-36 xl:-mt-0 5xl:gap-20 3xl:gap-14 sm:gap-10 gap-4 max-w-[1166px] relative z-10 ml-auto pr-7.5">
                                <h6 class="flex flex-col text-2xl font-bold leading-160 text-secondary-foreground whitespace-nowrap">
                                    Clients: <span class="text-lg font-normal">{{ $item['client'] }}</span>
                                </h6>
                                <h6 class="sm:flex hidden flex-col text-2xl font-bold leading-160 text-secondary-foreground whitespace-nowrap">
                                    Area: <span class="text-lg font-normal">{{ $item['area'] }}</span>
                                </h6>
                                <h6 class="sm:flex hidden flex-col text-2xl font-bold leading-160 text-secondary-foreground whitespace-nowrap">
                                    Project year: <span
                                        class="text-lg font-normal">{{ $item['project_year'] }}</span>
                                </h6>
                                <h6 class="flex flex-col text-2xl font-bold leading-160 text-secondary-foreground whitespace-nowrap">
                                    Project type: <span
                                        class="text-lg font-normal">{{ $item['project_type'] }}</span>
                                </h6>
                                <a href="/project-archive" class="4xl:block hidden">
                                    <x-ui.buttons.button-outline
                                        class="border-secondary text-secondary-foreground sm:px-10 px-3 whitespace-nowrap hover:border-primary">
                                        View Gallery
                                    </x-ui.buttons.button-outline>
                                </a>
                            </div>
                        </div>
                    </x-ui.swiper.item>
                @endforeach
                <div class="flex justify-center xl:justify-start items-center xl:items-end flex-col xl:flex-row gap-5">
                    <div
                        class="{{ 'project-pagination 3xl:max-w-[673px] max-w-[500px] w-full bg-primary xl:px-10 px-7 xl:pt-25 xl:pb-[150px] py-16 relative z-[1] xl:mt-[-271px] mt-[-100px] ' }}">
                    </div>
                    <div class="flex items-end sm:gap-5 gap-2">
                        <div @click="swiperRef?.slidePrev()">
                            <x-ui.buttons.button-fill
                                class="rotate-180 h-[75px] w-[75px] sm:px-3 px-3 after:bg-secondary border-secondary hover:border-primary hover:bg-primary hover:text-secondary text-primary-foreground">
                                <x-icons.right-arrow width="35" height="22"/>
                            </x-ui.buttons.button-fill>
                        </div>
                        <div @click="swiperRef?.slideNext()">
                            <x-ui.buttons.button-fill
                                class="h-[75px] hover:border-primary sm:px-10 px-3 after:left-0 ">
                                Next Project
                                <x-icons.right-arrow width="35" height="22"/>
                            </x-ui.buttons.button-fill>
                        </div>
                    </div>
                </div>
            </x-ui.swiper.wrapper>
            <div
                class="hero-pagination bg-[rgba(210, 224, 217, 0.27)] backdrop-blur-md xl:px-9 xl:py-[61px] sm:px-5 px-2 py-10 max-w-[800px] flex xl:gap-8 gap-5">
                @foreach ($items as $index => $item)
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
        </x-ui.swiper>
    </div>
</section>

<script>
    let swiperRef = null;
</script>
