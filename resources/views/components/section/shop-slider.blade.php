@props([ 'data'])

<section class="pt-20">
    <div class="container-fluid">
        <x-ui.section-title
            sectionName="Shop"
            sectionTitle="Design Elegance Emporium"
            sectionDesc="Discover Unparalleled Luxury for Your Space"
            link="/product-single"
            button_text="View Shop"


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
                    560 => [
                        'slidesPerView' => 2
                    ],
                    1200 => [
                        'slidesPerView' => 3
                    ],
                    1400 => [
                        'slidesPerView' => 4
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
                @foreach ($data as $item)
                    <x-ui.swiper.item key="{{ $item['id'] }}">
                        <x-ui.cards.product-card :data="$item"/>
                    </x-ui.swiper.item>
                @endforeach

            </x-ui.swiper.wrapper>
            <div class="container">
                <x-ui.swiper.progress-and-navigation/>
            </div>
        </x-ui.swiper>
    </div>
</section>