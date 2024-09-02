

<section class="pt-20">
    <div class="container-fluid">
        <x-ui.section-title
            sectionName="Video"
            sectionTitle="Visual Design Odyssey"
            sectionDesc="Where Imagination Takes Flight, and Excellence Blossoms"
        />
    </div>
    <div class="container-fluid lg:pt-30 2sm:pt-20 pt-14">
        <div class="relative after:contents-[''] after:absolute after:left-0 after:top-0 after:max-w-[1320px] after:w-full z-[1] after:h-full after:bg-primary  pt-[90px] pb-[110px]">
            <div class="container flex lg:flex-row flex-col justify-between relative z-10">
                <div class="2xl:max-w-[637px] lg:max-w-[500px] w-full">
                    <h4 class="text-secondary-foreground text-3xl 2sm:text-4xl font-bold leading-135">
                        Step into the dynamic world of Visual Design Odyssey
                    </h4>
                    <p class="text-secondary-foreground mt-5">
                        Watch our designs come to life through captivating videos that showcase our creativity, innovation, and the transformation of spaces from concept to reality.
                    </p>
                    <ul class="mt-[35px]">
                        <li class="text-secondary-foreground flex items-center gap-[27px]">
                            <x-icons.right-arrow width="35" height="22" />
                            <span class="text-secondary-foreground text-2xl leading-160 font-bold">Initial Vision</span>
                        </li>
                        <li class="text-secondary-foreground flex items-center gap-[27px] mt-4">
                            <x-icons.right-arrow width="35" height="22" />
                            <span class="text-secondary-foreground text-2xl leading-160 font-bold">Collaborative Design</span>
                        </li>
                        <li class="text-secondary-foreground flex items-center gap-[27px] mt-4">
                            <x-icons.right-arrow width="35" height="22" />
                            <span class="text-secondary-foreground text-2xl leading-160 font-bold">Flawless Execution</span>
                        </li>
                    </ul>
                    <a href="#" class="mt-[70px] inline-block">
                        <x-ui.buttons.button-outline class="border-secondary text-secondary-foreground sm:px-10 px-3 hover:bg-secondary hover:text-primary-foreground">
                            Process of Our Work
                            <x-icons.right-arrow width="35" height="22" />
                        </x-ui.buttons.button-outline>
                    </a>
                </div>
                <div x-data>
                    <button @click="$dispatch('open-modal-1')" class="px-4 py-2 bg-blue-500 text-white rounded">Open Modal 1</button>
                </div>

                <x-ui.modal id="1">
                    <iframe
                        class="absolute top-0 left-0 w-full h-full"
                        src="https://www.youtube.com/embed/lfDZJqSrIuk?mute=0&autoplay=0"
                        frameborder="0"
                        allow="autoplay; encrypted-media"
                        allowfullscreen>
                    </iframe>
                </x-ui.modal>
{{--                <x-ui.video-play img="{{ asset('images/video-image.jpg') }}" />--}}
            </div>
        </div>
    </div>
</section>
