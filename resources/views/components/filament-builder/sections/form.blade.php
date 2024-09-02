<section>
    <div class="container-fluid">
        <x-ui.section-title
            :sectionName="$subtitle"
            :sectionTitle="$title"
            :sectionDesc="$description"
        />
        <div class='container lg:pt-30 2sm:pt-20 pt-14'>
            <div class='grid lg:grid-cols-2 gap-5'>
                <x-ui.image src="{{Storage::url($image)}}" loading='lazy' alt='contact-form' class='w-full h-auto'/>
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
