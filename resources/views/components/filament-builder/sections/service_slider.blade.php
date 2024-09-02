@php
    $items = App\Models\Service\Post::all();
@endphp

<section class="pt-20">
    <div class="container-fluid">
        <x-ui.section-title
            :sectionName="$subtitle"
            :sectionTitle="$title"
            :sectionDesc="$description"
            link="/services"
            button_text="View All Services"
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
                @foreach ($items as $index => $item)
                    @php
                        $index = $index < 9 ? '0' . ($index + 1) : $index + 1;
                    @endphp
                    <x-ui.swiper.item >
                        <x-ui.cards.service-card :index="$index" :data="$item"/>
                    </x-ui.swiper.item>
                @endforeach
            </x-ui.swiper.wrapper>
            <div class="container">
                <x-ui.swiper.progress-and-navigation/>
            </div>
        </x-ui.swiper>
    </div>
</section>


