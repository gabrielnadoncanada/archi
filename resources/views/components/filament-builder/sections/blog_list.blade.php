@php
    $items = App\Models\Blog\Post::all();
@endphp

<section>
    <div class="container-fluid">
        <x-ui.section-title
            :sectionName="$subtitle"
            :sectionTitle="$title"
            :sectionDesc="$description"
        />
        <div class='container lg:py-30 2sm:py-20 py-14'>
            <div class="grid lg:grid-cols-3 2sm:grid-cols-2 gap-x-5 gap-y-[75px]">
                @foreach ($items as $item)
                    <x-ui.cards.blog-card
                        :data="$item"
                    />
                @endforeach
            </div>
        </div>
        <x-ui.pagination/>
    </div>
</section>


