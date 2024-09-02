@php
    $items = App\Models\Team\Post::all()->published();
@endphp

<div class="pt-20">
    <div class="container-fluid">
        <x-ui.section-title
            :sectionName="$subtitle"
            :sectionTitle="$title"
            :sectionDesc="$description"
        />
    </div>
    <div class='container lg:pt-30 2sm:pt-20 pt-14'>
        <div class='grid lg:grid-cols-3 2sm:grid-cols-2 gap-7'>
            @foreach ($items as $item)
                <x-ui.cards.team-card-one
                    :data="$item"
                />
            @endforeach
        </div>
    </div>
</div>
