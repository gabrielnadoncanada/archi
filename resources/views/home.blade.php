<x-layouts.app>
    <x-header.header-one/>

    <main>
        <x-section.heroes.banner-one :data="$bannerOne"/>
        <x-section.about.about-one/>
        <x-section.gallery :data="$projects"/>
        <x-section.services-slider :data="$services"/>

        <div class="pt-20">
            <div class="container-fluid">
                <x-ui.section-title
                    sectionName="Team"
                    sectionTitle="Architects of Architronix"
                    sectionDesc="Where Imagination Takes Flight, and Excellence Blossoms"
                    button_text="All Architects"
                    link="/team"
                />
            </div>
            <div class="container lg:pt-[340px] 2sm:pt-20 pt-14">
                <div class="grid lg:grid-cols-3 2sm:grid-cols-2 gap-7">
                    @foreach ($teams as $data)
                        <x-ui.cards.team-card-one :data="$data" class="team-card"/>
                    @endforeach
                </div>
            </div>
        </div>

        <x-section.testimonial/>
        <x-section.shop-slider :data="array_slice($products,0,5)"/>


        <x-section.feedback/>
    </main>

    <x-footer/>

</x-layouts.app>

