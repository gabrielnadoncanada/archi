<div class="grid 2xl:grid-cols-[auto_25%] lg:grid-cols-[auto_32%] 2xl:gap-[143px] lg:gap-16 pb-20">
    <div>
        <h2 class="[font-size:_clamp(33px,5vw,48px)] font-bold text-primary-foreground pb-7.5">Leave a comment</h2>
        <form>
            <x-ui.text-area-field placeholder="Write your comment" class="min-h-[225px] mb-7.5" />
            <div class="flex sm:flex-row flex-col gap-4">
                <x-ui.input-field placeholder="Your name*" type="text" />
                <x-ui.input-field placeholder="Your Email*" type="email" />
            </div>
            <div class="mt-7.5 flex justify-end">
                <x-ui.buttons.button-fill>
                    Submit <x-icons.right-arrow width="35" height="22" />
                </x-ui.buttons.button-fill>
            </div>
        </form>
    </div>
</div>
