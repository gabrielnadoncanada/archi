@props(['order' => '', 'position' => '', 'data' => []])

<div class="xl:max-w-[95%] w-full mx-auto relative overflow-hidden">
    <div class="container">
        <div class="flex lg:flex-row flex-col items-stretch lg:items-center lg:pb-[170px] pb-25">
            <div class="{{ $order }} lg:w-1/2">
                <div class="{{ $position }} w-full  lg:max-w-[60%] max-h-[700px] h-full">
                    <img src="{{ Storage::url($data['image']) }}" loading="lazy" alt="project-img-1" class="object-cover w-full h-full"/>
                </div>
            </div>
            <div
                class="lg:w-1/2 lg:mt-[187px] relative z-[1]"
            >
                <div class="bg-primary xl:px-16 px-8 xl:pt-[78px] pt-10 xl:pb-[58px] pb-7">
                    <h3 class="xl:text-5xl md:text-[40px] text-4xl font-extrabold leading-120 text-secondary-foreground pb-10">{{ $data['title'] }}</h3>
                    <p class="text-secondary-foreground mb-7">{{ $data['description'] }}</p>
                    <ul class="mb-9">
                        <li class="flex items-center mb-[6px]">
                            <span class="inline-block font-extrabold min-w-32 text-secondary-foreground">Year:</span>
                            <span class="font-medium text-secondary-foreground">{{ $data['year'] }}</span>
                        </li>
                        <li class="flex items-center mb-[6px]">
                            <span
                                class="inline-block font-extrabold min-w-32 text-secondary-foreground">Category:</span>
                            <span class="font-medium text-secondary-foreground">{{ $data->categories->first()->title }}</span>
                        </li>
                        <li class="flex items-center mb-[6px]">
                            <span
                                class="inline-block font-extrabold min-w-32 text-secondary-foreground">Location:</span>
                            <span class="font-medium text-secondary-foreground">{{ $data['location'] }}</span>
                        </li>
                    </ul>
                    <a href="/ser{{ $data['slug'] }}">
                        <x-ui.buttons.button-fill
                            class="border-secondary !text-primary-foreground hover:!text-secondary-foreground after:left-0 after:bg-secondary">
                            View Project
                            <x-icons.right-arrow width="35" height="22"/>
                        </x-ui.buttons.button-fill>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
