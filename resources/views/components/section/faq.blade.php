@props(['data'])

<section {{$attributes->merge(['class'=> 'pt-20'])}}>
    <div class="container-fluid">
        <x-ui.section-title sectionName="FAQ" sectionTitle="Design Insights Unveiled"
                         sectionDesc="Answers to Your Design Questions"/>
    </div>
    <div class="container lg:pt-30 2sm:pt-20 pt-14">
        <div class="grid lg:grid-cols-[40%_auto] items-center gap-17.5">
            <div>
                <x-ui.section-sidebar-img img="{{ asset('images/faq-image.jpg') }}" section_name="faq-background"/>
            </div>

            <div>
                <x-ui.accordion :items="$data"></x-ui.accordion>
            </div>
        </div>
    </div>
</section>
