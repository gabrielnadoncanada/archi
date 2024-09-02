@php
    $data = [
        ['id' => 1, 'skill_name' => 'Interior Design', 'achieve' => '50%'],
        ['id' => 2, 'skill_name' => 'Sustainability', 'achieve' => '85%'],
        ['id' => 3, 'skill_name' => 'Decor', 'achieve' => '90%'],
        ['id' => 4, 'skill_name' => 'Visualization', 'achieve' => '93%'],
    ];
@endphp

<section class="mt-20">
    <div class="container-fluid">
        <x-ui.section-title sectionName="Expertise" sectionTitle="Mastering the Art of Design" sectionDesc="Where Creativity Meets Proficiency" />
        <div class="lg:mt-30 2sm:mt-20 mt-14 bg-secondary">
            <div class="flex lg:flex-row flex-col items-center ">
                <div class="lg:w-1/2 self-stretch">
                    <x-ui.section-sidebar-img :img="asset('images/expertise.jpg')" section_name="Expertise-bg" class="w-full  h-full" />
                </div>
                <div class="px-4 p-10 lg:p-20 max-w-[609px] w-full">
                    <x-ui.title title_text="Expertise Progress" class="2xl:mb-20 mb-14" />
                    <div>
                        @foreach ($data as $item)
                            <div  class="bg-primary_rgba relative h-[1px] w-full mt-16">
                                <div class="bg-primary absolute -top-[2.5px] left-0 h-[5px]" style="width: {{ $item['achieve'] }}; transition: width 1s ease-in-out;">
                                    <span class="absolute left-0 bottom-full mb-2 font-semibold text-primary-foreground">{{ $item['skill_name'] }}</span>
                                    <span class="absolute -right-4 bottom-full mb-2 font-semibold text-primary-foreground">{{ $item['achieve'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
