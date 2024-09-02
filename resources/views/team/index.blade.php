<x-layouts.app>
    <x-header.header-one class="!static"/>
    <main>
        <div class="pt-20">
            <div class="container-fluid">
                <x-ui.section-title
                    sectionName="Team"
                    sectionTitle="Architects of Architronix"
                    sectionDesc="Where Imagination Takes Flight, and Excellence Blossoms"
                />
            </div>
            <div class='container lg:pt-30 2sm:pt-20 pt-14'>
                <div class='grid lg:grid-cols-3 2sm:grid-cols-2 gap-7'>
                    @foreach ($teams as $item)
                        <x-ui.cards.team-card-one
                            :data="$item"
                        />
                    @endforeach
                </div>
            </div>
        </div>
        <x-section.feedback/>
    </main>
    <x-footer/>
</x-layouts.app>

