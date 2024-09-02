@php
    $items = App\Models\Product\Post::all();
@endphp

<x-layouts.app>
    <x-header.header-one class="!static"/>
    <main>
        <div class="container-fluid">
            <x-ui.section-title
                :sectionName="$subtitle"
                :sectionTitle="$title"
                :sectionDesc="$description"
            />
        </div>
        <div class='container mt-30'>
            <div class='grid lg:grid-cols-3 2sm:grid-cols-2 gap-x-7 gap-y-17.5 mb-25'>
                @foreach ($items as $data)
                    <x-ui.cards.product-card :data="$data"/>
                @endforeach
            </div>
            <x-ui.pagination/>
        </div>
        <x-section.feedback/>
    </main>
    <x-footer/>
</x-layouts.app>

