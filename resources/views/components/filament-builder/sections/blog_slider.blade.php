@php
    $items = App\Models\Blog\Post::all()->take(4);
@endphp

<section class="pt-20">
    <div class="container-fluid">
        <x-ui.section-title
            :sectionName="$subtitle"
            :sectionTitle="$title"
            :sectionDesc="$description"
        />
    </div>
    <div class="container lg:pt-30 2sm:pt-20 pt-14">
        <x-ui.swiper
            :options="[
        'spaceBetween' => 18,
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
                    <x-ui.swiper.item key="{{ $item['id'] }}">
                        <x-ui.cards.blog-card :data="$item"/>
                    </x-ui.swiper.item>
                @endforeach
            </x-ui.swiper.wrapper>
            <div class="container">
                <x-ui.swiper.progress-and-navigation/>
            </div>
        </x-ui.swiper>
    </div>
</section>

