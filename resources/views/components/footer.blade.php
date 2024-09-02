<footer class="container-fluid mx-auto">
    <div class="bg-secondary">
        <div class="container">
            <div class="grid lg:grid-cols-3 grid-cols-1 items-center pt-[100px] pb-20">
                <div>
                    <a href="/" class="text-primary-foreground">
                        <img height="31" width="219" alt="" src="{{Storage::url(theme('footer_logo'))}}">
                    </a>

                </div>
                <div class="mt-12 lg:mt-0 flex gap-x-10">
                    <span class="h-[198px] w-[1px] bg-primary block my-2.5"></span>
                    <div>
                        <h5 class="text-2xl font-extrabold block text-primary-foreground leading-160">Address Spain:</h5>
                        <span class="w-[99px] h-[1px] bg-primary block my-2.5"></span>
                        <div>
                            <p class="text-xl font-bold text-primary-foreground">Architronix, </p>
                            <p class="text-lg text-primary-foreground">Avda. Valencia, 3, 46891, </p>
                            <p class="text-lg text-primary-foreground">Palomar (Valencia), SPAIN </p>
                        </div>
                        <div class="mt-[17px]">
                            <a href="tel:+34962398486" class="text-lg block text-primary-foreground hover-underline">Phone: <span>+34 96 239 84 86</span></a>
                            <a href="mailto:hello@architronix.com" class="text-lg block text-primary-foreground hover-underline">Email: <span>hello@architronix.com</span></a>
                        </div>
                    </div>
                </div>
                <div class="mt-12 lg:mt-0 flex gap-x-10">
                    <span class="h-[198px] w-[1px] bg-primary block my-2.5"></span>
                    <div>
                        <h5 class="text-2xl font-extrabold inline-block text-primary-foreground leading-160">Address USA:</h5>
                        <span class="w-[99px] h-[1px] bg-primary block my-2.5"></span>
                        <div class="mt-[18px]">
                            <p class="text-xl font-bold text-primary-foreground">Architronix Inc, </p>
                            <p class="text-lg text-primary-foreground">208 English Road, High Point, </p>
                            <p class="text-lg text-primary-foreground">NC 27262, USA </p>
                        </div>
                        <div class="mt-[17px]">
                            <a href="tel:+34962398486" class="text-lg block text-primary-foreground hover-underline">Phone: <span>+336 885 6670</span></a>
                            <a href="mailto:hello@architronix.com" class="text-lg block text-primary-foreground hover-underline">Email: <span>hello@architronix.com</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="bg-primary-foreground" />
            <div class="py-8 lg:flex justify-between items-center">
                <x-ui.social-media-list />
                <span class="text-sm text-primary-foreground block mt-3 lg:mt-0">©2024, Architronix, All Rights Reserved</span>
            </div>
        </div>
    </div>
</footer>
