@php
    $items = App\Models\Project\Post::all()->take(5);
@endphp

<section class="pt-20">
    <div class="container-fluid">
        <x-ui.section-title
            :sectionName="$subtitle"
            :sectionTitle="$title"
            :sectionDesc="$description"
            link="/project-archive"
            button_text="View All Projects"
        />
    </div>
    <div class="flex flex-col sm:flex-row lg:flex-nowrap flex-wrap lg:pt-30 2sm:pt-20 pt-14">
        @foreach($items as $item)
            <div
                class="group hover:lg:basis-[47%] hover:basis-[50%] lg:basis-[20%] basis-[30%] flex-grow sm:min-h-[750px] min-h-[420px] overflow-hidden group transition-all duration-700 relative"
            >
                <div
                    class="absolute w-full h-full top-0 left-0 flex flex-col justify-between 2xl:pl-[30px] pl-5 pr-5 2xl:pr-0 py-[30px] after:absolute after:left-0 after:bottom-0 after:contents-[''] after:w-full after:h-1/2 after:bg-bottom-liner after:z-[-1] z-10">
                    <h3 class="group-hover:webkit-text-stroke-primary text-6xl font-extrabold leading-120 transition-all duration-700 text-transparent webkit-text-stroke-width-1 webkit-text-stroke-white">
                        {{$item['id']}}
                    </h3>
                    <div
                        class="group-hover:flex-row flex flex-col sm:flex-row 2xl:flex-row items-start justify-between 2xl:items-end">
                        <x-ui.link :href="$item['slug']"
                                   class="text-3xl 2sm:text-4xl font-bold leading-135 text-white max-w-60 2xl:min-w-56 min-w-48 relative">
                            {{$item['title']}}
                        </x-ui.link>
                        <p class="group-hover:opacity-100 sm:opacity-0 opacity-100 text-secondary-foreground font-semibold 3xl:max-w-[421px] 2xl:max-w-80 transition-all duration-700 3xl:min-w-[420px] xl:min-w-80 min-w-72 overflow-hidden"
                        >{{$item['description']}}</p>
                    </div>
                </div>
                <x-ui.image src="{{Storage::url($item['image'])}}" :alt="$item['description']" loading="lazy"
                            class="h-full sm:min-h-[750px] min-h-[420px] w-full object-cover"/>
            </div>
        @endforeach
    </div>
</section>


