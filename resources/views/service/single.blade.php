<x-layouts.app>
    <x-header.header-one class="!static"/>
    <main>
        <section>
            <div class='container-fluid '>
                <x-ui.section-title
                    sectionName="Services"
                    sectionTitle="Color Consultation"
                    sectionDesc="Exploring Excellence in Every Meticulous Design Detail"
                />
            </div>
            <div class='container lg:pt-30 2sm:pt-20 pt-14'>
                <div class='grid lg:grid-cols-[58%_auto] xl:gap-[120px] gap-15 items-start'>
                    <div>
                        <x-ui.image src="{{asset('/images/service-paint-image.jpg')}}" loading='lazy'
                                    alt='service-img'/>
                        <div class='pt-12.5'>
                            <x-ui.title title_text="Overview"/>
                            <p class='text-primary-foreground '>
                                At Architronix, our Color Consultation services are designed to elevate your space
                                through the power of color. Whether you're revamping your home, office, or commercial
                                establishment, our expert color consultants bring a wealth of knowledge and creativity
                                to transform your environment.
                            </p>
                        </div>
                        <div class='pt-12.5'>
                            <x-ui.title title_text="What's Included"/>
                            <ul>
                                <li>
                                    <h5 class='font-bold'>Personalized Color Schemes:</h5>
                                    <p class='mt-2.5 xl:ml-[113px] 2sm:ml-14 ml-10'>Tailored color palettes crafted to
                                        complement your style, preferences, and the unique characteristics of your
                                        space.</p>
                                </li>
                                <li class='pt-7.5'>
                                    <h5 class='font-bold'>Expert Advice:</h5>
                                    <p class='mt-2.5 xl:ml-[113px] 2sm:ml-14 ml-10'>Consultation with our experienced
                                        color specialists who provide insights into the psychological and aesthetic
                                        aspects of color selection.</p>
                                </li>
                                <li class='pt-7.5'>
                                    <h5 class='font-bold'>Space Analysis:</h5>
                                    <p class='mt-2.5 xl:ml-[113px] 2sm:ml-14 ml-10'>In-depth analysis of your space,
                                        considering lighting, architecture, and existing elements to ensure cohesive and
                                        harmonious color choices.</p>
                                </li>
                                <li class='pt-7.5'>
                                    <h5 class='font-bold'>Material Coordination:</h5>
                                    <p class='mt-2.5 xl:ml-[113px] 2sm:ml-14 ml-10'>Guidance on coordinating colors with
                                        existing materials, furniture, and decor elements to achieve a unified and
                                        polished look.</p>
                                </li>
                                <li class='pt-7.5'>
                                    <h5 class='font-bold'>Trend Integration:</h5>
                                    <p class='mt-2.5 xl:ml-[113px] 2sm:ml-14 ml-10'>Incorporation of current design
                                        trends while ensuring a timeless and enduring appeal.</p>
                                </li>
                            </ul>
                        </div>
                        <div class='pt-12.5'>
                            <x-ui.title title_text="How It Works"/>
                            <ul>
                                <li>
                                    <h5 class='font-bold'>Consultation Request:</h5>
                                    <p class='mt-2.5 xl:ml-[113px] 2sm:ml-14 ml-10'>Reach out to our team and express
                                        your interest in a Color Consultation.</p>
                                </li>
                                <li class='pt-7.5'>
                                    <h5 class='font-bold'>Initial Discussion:</h5>
                                    <p class='mt-2.5 xl:ml-[113px] 2sm:ml-14 ml-10'>A preliminary discussion to
                                        understand your goals, preferences, and any specific challenges you're facing
                                        with your space.</p>
                                </li>
                                <li class='pt-7.5'>
                                    <h5 class='font-bold'>Personalized Color Plan:</h5>
                                    <p class='mt-2.5 xl:ml-[113px] 2sm:ml-14 ml-10'>Depending on your location and
                                        preference, we offer on-site or virtual consultations to assess your space.</p>
                                </li>
                                <li class='pt-7.5'>
                                    <h5 class='font-bold'>Follow-Up Support:</h5>
                                    <p class='mt-2.5 xl:ml-[113px] 2sm:ml-14 ml-10'>Our consultants develop a
                                        personalized color plan with detailed recommendations and visual
                                        representations.</p>
                                </li>
                            </ul>
                        </div>
                        <strong class='mt-12.5 block'>
                            Enhance your surroundings with the transformative impact of carefully chosen colors. Let
                            Architronix bring your vision to life through our expert Color Consultation services.
                        </strong>
                    </div>
                    <x-ui.service-single-sidebar :servicesData="$services"/>
                </div>
            </div>
        </section>
        <x-section.feedback/>
    </main>
    <x-footer/>
</x-layouts.app>
