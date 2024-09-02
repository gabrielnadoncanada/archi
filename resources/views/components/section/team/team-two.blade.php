@props(['data'])
<section {{ $attributes }}>
    <div class="container-fluid">
        <x-ui.section-title sectionName="Credits" sectionTitle="Exploring Our Creations" sectionDesc="The Talented Team Behind 'Elegant Urban Oasis'" />
    </div>
    <div class="container lg:pt-30 2sm:pt-20 pt-14">
        <div class="grid 2sm:grid-cols-2 gap-10">
            @foreach ($data as $index => $item)
                @if ($index < 4)
                    <x-ui.cards.team-card-two :data="$item" />
                @endif
            @endforeach
        </div>
    </div>
    <div class="container pt-30">
        <div class="relative after:absolute after:xl:-left-12.5 after:-left-7 after:top-1/2 after:-translate-y-1/2 after:w-[1px] after:h-[130%] after:bg-primary xl:ml-12.5 ml-7">
            <h1 class="xl:text-[130px] lg:text-8xl 2sm:text-7xl text-5xl font-extrabold leading-110 text-primary-foreground">Other <br /> Credits</h1>
        </div>
        <div class="grid lg:grid-cols-3 grid-cols-2 gap-[23px] mt-20">
            @foreach ($data as $index => $item)
                @if ($index >= 4 && $index < 6)
                    <x-ui.cards.team-card-three :data="$item" />
                @endif
            @endforeach
        </div>
    </div>
</section>
