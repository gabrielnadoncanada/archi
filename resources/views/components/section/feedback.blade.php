<section class="container py-20">
    <div
        class="bg-cover bg-no-repeat lg:pt-[117px] pt-20 pb-[69px] lg:pl-[148px] pl-10 lg:pr-[133px] 2sm:pr-24 pr-10 flex md:flex-row flex-col justify-between md:items-end items-start"
        style="background-image: url('{{ asset('images/feedback-image.jpg') }}')">
        <h1 class="[font-size:_clamp(48px,7vw,130px)] font-extrabold leading-110 text-secondary-foreground max-w-[600px]">
            Drop Us a Line</h1>
        <a href="/contact">
            <x-ui.buttons.button-fill
                class="after:left-0 after:bg-secondary !text-primary-foreground border-secondary hover:!text-secondary-foreground mt-6 md:mt-0">
                Let’s Talk
                <x-icons.right-arrow width="35" height="22"/>
            </x-ui.buttons.button-fill>
        </a>
    </div>
</section>
