<x-layouts.app>
    <x-header.header-one class="!static"/>
    <main>
        <div>
            <div class='container-fluid '>
                <x-ui.section-title
                    sectionName="Architect"
                    sectionDesc="Interior Alchemist"
                >
                    <x-slot:sectionTitle>
                        Russell <br> Otten
                    </x-slot:sectionTitle>
                </x-ui.section-title>
            </div>
            <div class='container lg:pt-30 2sm:pt-20 pt-14'>
                <div
                    class='grid xl:grid-cols-[auto_538px] lg:grid-cols-[auto_350px] md:grid-cols-[auto_400px] 2xl:gap-[132px] gap-16 items-start'>
                    <div>
                        <div class='mb-12.5'>
                            <x-ui.title title_text="Brief Bio:"/>
                            <p>Russell Otten, the Interior Alchemist at Architronix, adds a touch of magic to spaces.
                                With over a decade of experience, Russell blends artistic flair with a deep
                                understanding of client aspirations.</p>
                        </div>
                        <div class='pt-12.5'>
                            <x-ui.title title_text="Expertise and Specializations:"/>
                            <ul>
                                <li>
                                    <h5 class='font-bold'>Architectural Focus: </h5>
                                    <p class='mt-2.5 xl:ml-[113px] 2sm:ml-14 ml-10'>Russell specializes in residential,
                                        commercial a outdoor design.</p>
                                </li>
                                <li class='pt-7.5'>
                                    <h5 class='font-bold'>Specializations: </h5>
                                    <p class='mt-2.5 xl:ml-[113px] 2sm:ml-14 ml-10'>His expertise lies in creating a
                                        timeless interiors that seamlessly blend luxury and functionality.</p>
                                </li>
                            </ul>
                        </div>
                        <div class='pt-20'>
                            <x-ui.title title_text="Design Philosophy:"/>
                            <ul>
                                <li>
                                    <h5 class='font-bold'>Philosophy Overview: </h5>
                                    <p class='mt-2.5 xl:ml-[113px] 2sm:ml-14 ml-10'>Russell's design philosop
                                        Architronix revolves around capturing the essence of each client's persionality
                                        and translating it into a space that feels uniquely theirs.</p>
                                </li>
                                <li class='pt-7.5'>
                                    <h5 class='font-bold'>Client-Centric Approach: </h5>
                                    <p class='mt-2.5 xl:ml-[113px] 2sm:ml-14 ml-10'>Through close collaboration, Russell
                                        ensures that a every design reflects the client's vision and exceeds
                                        expectations.</p>
                                </li>
                            </ul>
                        </div>
                        <div class='pt-20'>
                            <x-ui.title title_text="Education and Credentials:"/>
                            <ul>
                                <li>
                                    <h5 class='font-bold'>Educational Background: </h5>
                                    <p class='mt-2.5 xl:ml-[113px] 2sm:ml-14 ml-10'>Russell holds a Master's in Interior
                                        of the Design from Architronix University of Belgium.</p>
                                </li>
                                <li class='pt-7.5'>
                                    <h5 class='font-bold'>Professional Credentials: </h5>
                                    <p class='mt-2.5 xl:ml-[113px] 2sm:ml-14 ml-10'>Recognized as an the industry
                                        leader, Russell is a member of the National Interior Design for Association
                                        (NIDA) and has received accolades for his innovative designs.</p>
                                </li>
                            </ul>
                        </div>
                        <div class='pt-20'>
                            <x-ui.title title_text="Awards and Recognition:"/>
                            <ul>
                                <li>
                                    <h5 class='font-bold'>Achievements: </h5>
                                    <p class='mt-2.5 xl:ml-[113px] 2sm:ml-14 ml-10'>Russell Otten's work at Architronix
                                        has been feeatured in Design Excellence Magazine, earning him the Interior
                                        Alchemist x-ui.title.</p>
                                </li>

                            </ul>
                        </div>
                        <div class='pt-20'>
                            <x-ui.title title_text="Contact information:"/>
                            <ul>
                                <li class='flex items-center mb-3'>
                                    <h5 class='font-bold min-w-28'>Email: </h5>
                                    <x-ui.link href="mailto:russell@architronix.com" class='hover-underline'><span>russell@architronix.com</span>
                                    </x-ui.link>
                                </li>
                                <li class='flex items-center mb-3'>
                                    <h5 class='font-bold min-w-28'>Phone: </h5>
                                    <x-ui.link href="tel:555123-4567" class='hover-underline'>
                                        <span>(555) 123-4567</span></x-ui.link>
                                </li>
                                <li class='flex items-center'>
                                    <h5 class='font-bold min-w-28'>Social: </h5>
                                    <div class=''>
                                        <x-ui.social-media-list/>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class='sticky top-16'>
                        <img
                            src="{{asset('images/team-1.jpg')}}" alt='Russell Otten'
                            class='w-full'
                        >
                        <x-ui.link href="" class='mt-11 inline-block'>
                            <x-ui.buttons.button-outline class="after:left-0">Connect to Linkedin
                                <x-icons.right-arrow width="53" height="22"/>
                            </x-ui.buttons.button-outline>
                        </x-ui.link>
                    </div>
                </div>
            </div>
        </div>
        <div class='container pt-20'>
            <h2 class='[font-size:_clamp(40px,7vw,90px)] text-primary-foreground font-extrabold leading-120 max-w-[651px]'>
                Portfolio Showcase:</h2>
            <div class='grid lg:grid-cols-3 2sm:grid-cols-2 gap-5 pt-10'>
                @foreach ($team['portfolio'] as $item)
                    <x-ui.cards.project-card-three
                        :data="$item"
                    />
                @endforeach
            </div>
        </div>
        <x-section.feedback/>
    </main>
    <x-footer/>
</x-layouts.app>

