<div class="relative overflow-x-hidden">
    <div class="bg-hero-section bg-no-repeat h-screen bg-center bg-cover">
        <video autoplay loop muted class="absolute inset-0 object-cover h-screen w-full">
            <source src="{{ asset('video/video-3.mp4') }}" type="video/mp4" />
        </video>
        <div class="container">
            <div class="absolute top-1/2 -translate-y-1/2">
                <h1 class="text-white [font-size:_clamp(60px,10vw,150px)] font-extrabold leading-[90%]">
                    Shaping Interior <br />
                    <x-ui.text-typed :text="['Excellence', 'Sophistication', 'Elegance', 'Brilliance', 'Harmony']" />
                </h1>
                <a href="/project-archive" class="mt-16 inline-block">
                    <x-ui.buttons.button-fill class="sm:px-10 px-4 after:left-0 after:bg-secondary text-primary-foreground border-secondary hover:text-secondary-foreground">
                        Explore Our Portfolio
                        <x-icons.right-arrow width="35" height="22" />
                    </x-ui.buttons.button-fill>
                </a>
            </div>
        </div>
    </div>
</div>
