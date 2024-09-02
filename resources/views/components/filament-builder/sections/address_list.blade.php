<section>
    <div class="container-fluid">
        <x-ui.section-title
            :sectionName="$subtitle"
            :sectionTitle="$title"
            :sectionDesc="$description"
        />
        <div class='container lg:pt-30 2sm:pt-20 pt-14'>

            <div class='grid lg:grid-cols-3 2sm:grid-cols-2 gap-7'>
                @foreach ($items as $key => $item)
                    @php
                        $item['id'] = $key < 9 ? '0' . ($key + 1) : $key + 1;
                    @endphp
                    <x-ui.cards.address-card
                        :data="$item"
                    />
                @endforeach

            </div>
        </div>
    </div>
</section>
