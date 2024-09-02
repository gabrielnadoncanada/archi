@php
    use App\Models\Project\Post;
    $items = Post::all();
@endphp

<section class="pt-20">
    <div class="container-fluid">
        <x-ui.section-title
            :sectionName="$subtitle"
            :sectionTitle="$title"
            :sectionDesc="$description"
            button_text="All Projects"
            link="/project-archive"
        />
    </div>
    <div class="container-fluid relative lg:pt-30 2sm:pt-20 pt-14">
        <x-ui.swiper
            :options="[
                'slidesPerView' => 1,
                'autoplay' => false,

                'speed' => 500,
                'loop' => true,
            ]"
        >
            <x-ui.swiper.wrapper>
                @foreach ($items as $item)
                    <x-ui.swiper.item>
                        <div
                            class="bg-cover bg-no-repeat pb-[70px] lg:pt-[758px] pt-[500px] max-w-[1550px] after:contents-[''] after:absolute after:top-0 after:right-0 after:w-full after:h-full after:bg-bottom-liner after:z-[1] after:max-w-[1550px] ml-auto"
                            style="background-image: url('{{ Storage::url($item['image']) }}')">
                            <div
                                class="flex xl:justify-end justify-center -mt-36 xl:-mt-0 5xl:gap-20 3xl:gap-14 sm:gap-10 gap-4 max-w-[1166px] relative z-10 ml-auto pr-7.5">
                                <h6 class="flex flex-col text-2xl font-bold leading-160 text-secondary-foreground whitespace-nowrap">
                                    Clients: <span class="text-lg font-normal">{{ $item[Post::CLIENT] }}</span>
                                </h6>
                                <h6 class="sm:flex hidden flex-col text-2xl font-bold leading-160 text-secondary-foreground whitespace-nowrap">
                                    Area: <span class="text-lg font-normal">{{ $item[Post::AREA] }}</span>
                                </h6>
                                <h6 class="sm:flex hidden flex-col text-2xl font-bold leading-160 text-secondary-foreground whitespace-nowrap">
                                    Project year: <span
                                        class="text-lg font-normal">{{ $item[Post::YEAR] }}</span>
                                </h6>
                                <h6 class="flex flex-col text-2xl font-bold leading-160 text-secondary-foreground whitespace-nowrap">
                                    Project type: <span
                                        class="text-lg font-normal">{{ $item->categories()->first()->title }}</span>
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

            </x-ui.swiper.wrapper>
            <div class="flex justify-center xl:justify-start items-center xl:items-end flex-col xl:flex-row gap-5">
                <div
                    class="{{ 'hero-pagination project-pagination 3xl:max-w-[673px] max-w-[500px] w-full bg-primary xl:px-10 px-7 xl:pt-25 xl:pb-[150px] py-16 relative z-[1] xl:mt-[-271px] mt-[-100px] ' }}">
                    @foreach ($items as $key => $item)
                        <div class='opacity-0 relative h-0 translate-y-15 ' :class="{'bullet-active': currentSlide === {{ $key }}}">
                            <h2 class='!text-secondary-foreground leading-120 [font-size:_clamp(48px,8vw,82px)] font-extrabold '>{{$item['title']}}</h2>
                            <a href="/project-single" class='text-secondary-foreground mt-[30px]'>{{$item['description']}}</a>
                        </div>
                    @endforeach
                </div>
                <div class="flex items-end sm:gap-5 gap-2">
                    <div @click="swiperRef?.slidePrev()">
                        <x-ui.buttons.button-fill
                            class="rotate-180 h-[75px] w-[75px] sm:px-3 px-3 after:bg-secondary border-secondary hover:border-primary hover:bg-primary hover:!text-secondary !text-primary-foreground">
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
        </x-ui.swiper>
    </div>
</section>

<script>
    let swiperRef = null;
</script>
