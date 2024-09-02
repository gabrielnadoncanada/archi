<x-layouts.app>
    <x-header.header-one class="!static"/>
    <main>
        <section>
            <div class="container-fluid">
                <x-ui.section-title
                    sectionName="Contact"
                    sectionTitle="Let's Design Together"
                    sectionDesc="Reach out to bring your dream spaces to life."

                />
                <div class='container lg:pt-30 2sm:pt-20 pt-14'>

                    <div class='grid lg:grid-cols-3 2sm:grid-cols-2 gap-7'>
                        @foreach ($addresses as $item)
                            <x-ui.cards.address-card
                                :data="$item"
                            />
                        @endforeach

                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid">
                <x-ui.section-title
                    sectionName="Inquiry"
                    sectionTitle="Have a Project in your mind?"
                    sectionDesc="Write us directly"
                />
                <div class='container lg:pt-30 2sm:pt-20 pt-14'>
                    <div class='grid lg:grid-cols-2 gap-5'>
                        <x-ui.image src="{{asset('images/contact-image.jpg')}}" loading='lazy' alt='contact-form' class='w-full h-auto'/>
                        <form>
                            <x-ui.input-field placeholder="Your Name" type="text" class="mb-[13px]"/>
                            <div class='flex sm:flex-row flex-col gap-x-5'>
                                <x-ui.input-field placeholder="Phone Number" type="number" class="mb-[13px]"/>
                                <x-ui.input-field placeholder="Your Email" type="email" class="mb-[13px]"/>
                            </div>
                            <x-ui.text-area-field placeholder='Type your massage' class="min-h-[223px] mb-[13px]"/>
                            <div class='flex justify-end'>
                                <x-ui.buttons.button-outline>Send message
                                    <x-icons.right-arrow height="22" width="35"/>
                                </x-ui.buttons.button-outline>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <x-section.feedback/>
    </main>
    <x-footer/>
</x-layouts.app>

