@php
    $projectImgList = [
        ['id' => 1, 'img' => asset('images/project-image-3.jpg')],
        ['id' => 2, 'img' => asset('images/project-image-4.jpg')],
        ['id' => 3, 'img' => asset('images/project-image-5.jpg')],
        ['id' => 4, 'img' => asset('images/project-image-3.jpg')],
        ['id' => 5, 'img' => asset('images/project-image-4.jpg')],
        ['id' => 6, 'img' => asset('images/project-image-5.jpg')],
    ];
@endphp

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
    <div class="container-fluid relative lg:pt-30 2sm:pt-20 pt-14 project-slider-one">
        <x-ui.swiper
            :options="[
                'spaceBetween' => 30,
                'breakpoints' => [
                    '380' => ['slidesPerView' => 1, 'slidesPerGroup' => 1],
                    '750' => ['slidesPerView' => 2, 'spaceBetween' => 20],
                    '1320' => ['slidesPerView' => 3, 'spaceBetween' => 40],
                ],
                'pagination' => [
                    'clickable' => true,
                    'el' => '.progressbar-pagination',
                    'type' => 'progressbar'
                ],
                'loop' => true,
            ]"
        >
            <x-ui.swiper.wrapper>
                @foreach ($projectImgList as $project)
                    <x-ui.swiper.item key="{{ $project['id'] }}">
                        <img src="{{ $project['img'] }}" loading="lazy" alt="img" class="w-full h-full min-h-16" />
                    </x-ui.swiper.item>
                @endforeach

            </x-ui.swiper.wrapper>
            <div class="container">
                <x-ui.swiper.progress-and-navigation />
            </div>
        </x-ui.swiper>
    </div>
</section>

<script>
    let swiperRef = null;
</script>
