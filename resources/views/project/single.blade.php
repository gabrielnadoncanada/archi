<x-layouts.app>
    <x-header.header-one class="!static"/>
    <main>
        <div class='blog-single'>
            <div>
                <x-ui.image src="{{asset('/images/project-hero-image.jpg')}}" loading='lazy' alt="img"
                            class="w-full aspect-video max-h-[40vh] object-cover"/>
                <div class='container 2sm:mt-[156px] sm:mt-30 mt-20'>
                    <div class='grid lg:grid-cols-[65%_auto] gap-[38px]'>
                        <div
                            class='relative after:absolute sm:after:-left-12.5 after:-left-5 after:top-1/2 after:-translate-y-1/2 after:w-[1px] sm:after:h-[130%] after:h-[120%] after:bg-primary sm:ml-12.5 ml-5'>
                            <h1 class='text-primary-foreground [font-size:_clamp(48px,7vw,130px)] font-extrabold leading-110'>
                                A dream villa</h1>
                            <span class='inline-block w-[300px] h-[1px] bg-primary'></span>
                            <p class='text-2xl sm:text-3xl 2sm:text-4xl !leading-160 text-primary-foreground mt-[18px]'>
                                The design of this apartment facing Ipanema beach, in Rio de Janeiro, was designed for a
                                couple with two young children, who wanted a space to accompany their daughters' growth
                                and also environments with privacy for home office work.</p>
                        </div>
                        <div class=' bg-primary py-15 sm:px-[38px] px-5 lg:-mt-[410px]'>
                            <x-ui.title title_text="Elegant Urban Oasis" class="text-secondary-foreground mb-0"/>
                            <ul class='pb-7.5 pt-[75px] flex lg:flex-col flex-row flex-wrap lg:flex-nowrap gap-x-7 lg:gap-x-0 gap-y-[52px]'>
                                <li>
                                    <strong class='text-secondary-foreground block text-2xl mb-1.5'>Clients:</strong>
                                    <span class='text-secondary-foreground block'>Sogeprom</span>
                                </li>
                                <li>
                                    <strong class='text-secondary-foreground block text-2xl mb-1.5'>Area:</strong>
                                    <span class='text-secondary-foreground block'>891 m²</span>
                                </li>
                                <li>
                                    <strong class='text-secondary-foreground block text-2xl mb-1.5'>Project
                                        year:</strong>
                                    <span class='text-secondary-foreground block'>Sogeprom</span>
                                </li>
                                <li>
                                    <strong class='text-secondary-foreground block text-2xl mb-1.5'>Project
                                        type:</strong>
                                    <span class='text-secondary-foreground block'>Sogeprom</span>
                                </li>
                                <li>
                                    <strong class='text-secondary-foreground block text-2xl mb-1.5'>Location:</strong>
                                    <span class='text-secondary-foreground block'>Sogeprom</span>
                                </li>
                                <li>
                                    <strong class='text-secondary-foreground block text-2xl mb-1.5'>Team:</strong>
                                    <span class='text-secondary-foreground block'>Russell Otten, Gabriel Ranieri, Raissa Furlan, Maria Pereira</span>
                                </li>
                            </ul>
                            <x-ui.buttons.button-outline
                                class="text-secondary-foreground border-secondary whitespace-nowrap hover:text-primary-foreground hover:bg-secondary">
                                Technical Sheet
                                <span class='rotate-90'>
                                    <x-icons.right-arrow height="25" width="22"/></span>
                            </x-ui.buttons.button-outline>
                        </div>
                    </div>
                </div>
                <div class='container-fluid mt-30'>
                    <div class='flex lg:flex-row flex-col gap-8'>
                        <x-ui.image src="{{asset('/images/project-image-1.jpg')}}" loading='lazy' width="auto"
                                    height="auto" alt='img'
                                    class='w-full h-full'/>
                        <x-ui.image src="{{asset('/images/project-image-2.jpg')}}" loading='lazy' width="auto"
                                    height="auto" alt='img'
                                    class='w-full'/>
                    </div>
                </div>
                <x-section.project-single.paragraph/>
                <x-section.project-single.project-single-slider-one/>
                {{--                <x-section.project-single.paragraph/>--}}
                {{--                <x-section.project-single.project-single-slider-two/>--}}
                {{--                <x-section.project-single.paragraph/>--}}
            </div>

        </div>
        <x-section.team.team-two :data="$teams"/>
        <x-section.feedback/>
    </main>
    <x-footer/>
</x-layouts.app>



