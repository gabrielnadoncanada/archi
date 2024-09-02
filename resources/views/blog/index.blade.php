<x-layouts.app>
    <x-header.header-one class="!static"/>
    <main>
        <div class="container-fluid">
            <x-ui.section-title
                sectionName="Blog"
                sectionTitle="Design Insights & Inspiration"
                sectionDesc="Unveil the Secrets to Transforming Spaces"

            />
        </div>
        <div class='container lg:py-30 2sm:py-20 py-14'>
            <div class="grid lg:grid-cols-3 2sm:grid-cols-2 gap-x-5 gap-y-[75px]">
                @foreach ($blogs as $data)
                    <x-ui.cards.blog-card
                        :data="$data"
                    />
                @endforeach
            </div>

        </div>
        <x-ui.pagination/>
        <x-section.feedback/>
    </main>
    <x-footer/>
</x-layouts.app>

