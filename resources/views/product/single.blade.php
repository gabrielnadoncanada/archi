<x-layouts.app>
    <x-header.header-one class="!static"/>
    <main>
        <div class='container mt-20'>
            <div class='grid xl:grid-cols-[55%_auto] lg:grid-cols-2 gap-12.5'>
                <x-section.product-single.product-preview :data="$product"/>
                <x-section.product-single.product-overview :data="$product"/>
            </div>
            <x-section.product-single.product-description/>
        </div>
        <div class='container mt-30'>
            <x-ui.title title_text="Related Products" class="mb-10 md:mb-20"/>
            <div class='grid lg:grid-cols-3 2sm:grid-cols-2 gap-7.5'>
                @foreach (array_slice($products,0, 3) as $data)
                    <x-ui.cards.product-card :data="$data"/>
                @endforeach
            </div>
        </div>
        <x-section.feedback/>
    </main>
    <x-footer/>
</x-layouts.app>



