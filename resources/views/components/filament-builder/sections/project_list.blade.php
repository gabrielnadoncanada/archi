@php
    $items = App\Models\Project\Post::all();
@endphp

<section>
    <div class="container-fluid">
        <x-ui.section-title
            :sectionName="$subtitle"
            :sectionTitle="$title"
            :sectionDesc="$description"
        />
    </div>
    <div class='lg:pt-30 2sm:pt-20 pt-14'>
        @foreach ($items as $item)
            @if($item['id'] % 2 === 0)
                <x-ui.cards.project-card-one
                    :data="$item"
                    order="lg:order-1 order-0"
                    position="lg:absolute lg:right-0 lg:top-1/2 lg:-translate-y-1/2"

                />
            @else
                <x-ui.cards.project-card-one
                    :data="$item"
                    position="lg:absolute lg:left-0 lg:top-1/2 lg:-translate-y-1/2"
                />
            @endif
        @endforeach
    </div>
</section>
