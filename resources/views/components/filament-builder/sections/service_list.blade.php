@php
    $items = App\Models\Service\Post::all();
@endphp

<div
    class='bg-cover bg-no-repeat bg-center relative z-[1] after:contents-[""] after:z-[-1] after:absolute after:left-0 after:top-0 after:w-full after:h-full after:bg-[#d2e0d9a6] pt-20 pb-30'
    style="background-image: url({{asset('images/section-bg.jpg')}});">
    <div class='container-fluid '>
        <x-ui.section-title
            :sectionName="$subtitle"
            :sectionTitle="$title"
            :sectionDesc="$description"
        />
    </div>
</div>
<div class="container-fluid lg:pt-20 2sm:pt-16 pt-10">
    <div class="grid 2xl:grid-cols-4 lg:grid-cols-3 sm:grid-cols-2 gap-8 px-4 2sm:px-0">
        @foreach ($items as $item)
            <x-ui.cards.service-card :data="$item"/>
        @endforeach
    </div>
</div>
