<x-layouts.app>
    <x-header.header-one class="!static"/>
    <main>
        <div class="container-fluid">
            <x-ui.section-title
                sectionName="Career"
                sectionTitle="Career Opportunities"
                sectionDesc="Discover Your Future at Architronix: Where Innovation Meets Passion"

            />
        </div>
        <div class='container mt-30'>
            @foreach ($jobs as $data)
                <x-ui.cards.job-post-card
                    :data="$data"
                />
            @endforeach
        </div>
        <div class="pt-20">
            <div class="container-fluid">
                <x-ui.section-title
                    sectionName="Why"
                    sectionTitle="Why Join Architronix"
                    sectionDesc="Discover Your Future at Architronix: Where Innovation Meets Passion"

                />
                <div class='lg:pt-30 2sm:pt-20 pt-14  '>
                    <div class='grid xl:grid-cols-4 lg:grid-cols-2 2sm:grid-cols-2 gap-x-[32px] gap-y-10'>
                        @foreach ($services as $data)
                            <x-ui.cards.service-card
                                :data="$data"
                            />
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
        <x-section.about.about-three/>
        <x-section.faq :data="$faqs" class="pb-20"/>
    </main>
    <x-footer/>
</x-layouts.app>

