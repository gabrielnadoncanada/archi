@php

    $tagList = [
          [
              'id' => "1",
              'tag' => "Art and Decor",
              'x-ui.link' => ""
          ],
          [
              'id' => "2",
              'tag' => "Modern Living",
              'x-ui.link' => ""
          ],
          [
              'id' => "3",
              'tag' => "Renovations",
              'x-ui.link' => ""
          ],
          [
              'id' => "4",
              'tag' => "Vintage Style",
              'x-ui.link' => ""
          ],
      ]
@endphp

<x-layouts.app>
    <x-header.header-one class="!static"/>
    <main>
        <section class=''>
            <div
                class='object-cover bg-no-repeat 2xl:pt-[448px] xl:pt-[300px] lg:pt-[200px] pt-[150px] pb-[68px] relative z-[1] after:contents-[""] after:z-[-1] after:absolute after:left-0 after:bottom-0 after:w-full after:h-full after:bg-bottom-liner'
                style="background-image: url({{asset('images/blog-single-image.jpg')}})">
                <div class='container '>
                    <h1 class='text-[#F9FFFC] [font-size:_clamp(48px,6vw,90px)] font-extrabold leading-110'>Maximizing
                        Small Spaces: Tips for Cozy Apartment Living</h1>
                    <p class='mt-14 text-secondary-foreground flex sm:gap-[9px] gap-[1px]'><span>15 November ‘23</span>
                        / <span>Interior</span> / <span>5 min read</span></p>
                </div>
            </div>
            <div class='container lg:pt-30 2sm:pt-20 pt-14'>
                <div
                    class='grid 2xl:grid-cols-[auto_427px] lg:grid-cols-[auto_400px] 2xl:gap-[130px] lg:gap-16 items-start'>

                    <div>
                        <div>
                            <p class='text-primary-foreground'>In the fast-paced world of urban living, the allure of
                                compact city apartments iundeniable. The challenge lies in transforming these small
                                spaces into comfortable, stylish havens that cater to both function and aesthetics. With
                                a touch of creativity and a keen eye for design, you can create a cozy, inviting
                                apartment that maximizes every inch of space. Into this blog we'll explore some key tips
                                for making the most of your small apartment, turning it into a to warm and functional
                                home.</p>
                            <h3 class='text-3xl 2sm:text-4xl font-bold text-primary-foreground leading-135 pt-[23px] mb-[14px]'>
                                Embrace Minimalism:</h3>
                            <p class='text-primary-foreground'>In a smaller living space, less is often more. Embrace
                                minimalism by selecting furniture with clean lines, uncluttered surfaces, and a neutral
                                color palette. A minimalist to approach not only creates a sleek and open environment
                                but also instills an sense of calm and tranquility in your apartment.</p>
                        </div>

                        <div>
                            <h3 class='text-3xl 2sm:text-4xl font-bold text-primary-foreground leading-135 pt-[23px] mb-[14px]'>
                                Multi-Functional Furniture:</h3>
                            <x-ui.image src="{{asset('images/blog-inner-image.jpg')}}" loading='lazy' width="auto"
                                        height="auto"
                                        alt='Multi-Functional Furniture' class='pt-9 pb-12.5 w-full h-full'/>
                            <p class='text-primary-foreground'>In a smaller living space, less is often more. Embrace
                                minimalism by selecting furniture with clean lines, uncluttered surfaces, and a neutral
                                color palette. A minimalist to approach not only creates a sleek and open environment
                                but also instills an sense of calm and tranquility in your apartment.</p>
                        </div>

                        <div>
                            <h3 class='text-3xl 2sm:text-4xl font-bold text-primary-foreground leading-135 pt-[23px] mb-[14px]'>
                                Vertical Storage Solutions:</h3>
                            <p class='text-primary-foreground'>In a smaller living space, less is often more. Embrace
                                minimalism by selecting furniture with clean lines, uncluttered surfaces, and a neutral
                                color palette. A minimalist to approach not only creates a sleek and open environment
                                but also instills an sense of calm and tranquility in your apartment.</p>
                            <blockquote class='pt-20 pb-16 flex gap-6'>
                                <span class='text-secondary-foreground'><x-icons.quote width="121"/></span>
                                <div>
                                    Lighting plays a vital role in enhancing the atmosphere of your apartment. Choose
                                    ambient and task lighting that complements your decor. Well an placed fixtures not
                                    only visually expand your space but also contribute to a warm and cozy ambiance.
                                    <div
                                        class='mt-4 relative after:contents-[""] after:absolute after:-left-5 after:top-0 after:h-full  after:w-[1px] after:bg-primary left-5'>
                                        <p class='font-extrabold text-primary-foreground'>John Smith</p>
                                        <span>Smith & Co. Architecture.</span>
                                    </div>
                                </div>
                            </blockquote>

                            <p class='text-primary-foreground'>In a smaller living space, less is often more. Embrace
                                minimalism by selecting furniture with clean lines, uncluttered surfaces, and a neutral
                                color palette. A minimalist to approach not only creates a sleek and open environment
                                but also instills an sense of calm and tranquility in your apartment.</p>
                            <p class='text-primary-foreground pt-[18px]'>In a smaller living space, less is often more.
                                Embrace minimalism by selecting furniture with clean lines, uncluttered surfaces, and a
                                neutral color palette. A minimalist to approach not only creates a sleek and open
                                environment but also instills an sense of calm and tranquility in your apartment.</p>
                            <p class='text-primary-foreground pt-[18px]'>In a smaller living space, less is often more.
                                Embrace minimalism by selecting furniture with clean lines, uncluttered surfaces, and a
                                neutral color palette. A minimalist to approach not only creates a sleek and open
                                environment but also instills an sense of calm and tranquility in your apartment.</p>
                        </div>

                        <div>
                            <h3 class='text-3xl 2sm:text-4xl font-bold text-primary-foreground leading-135 pt-12.5 mb-[14px]'>
                                Use Light Colors:</h3>
                            <p class='text-primary-foreground '>In a smaller living space, less is often more. Embrace
                                minimalism by selecting furniture with clean lines, uncluttered surfaces, and a neutral
                                color palette. A minimalist to approach not only creates a sleek and open environment
                                but also instills an sense of calm and tranquility in your apartment.</p>
                        </div>

                        <div>
                            <h3 class='text-3xl 2sm:text-4xl font-bold text-primary-foreground leading-135 pt-[54px] mb-[14px]'>
                                Smart Storage Solutions:</h3>
                            <p class='text-primary-foreground '>In a smaller living space, less is often more. Embrace
                                minimalism by selecting furniture with clean lines, uncluttered surfaces, and a neutral
                                color palette. A minimalist to approach not only creates a sleek and open environment
                                but also instills an sense of calm and tranquility in your apartment.</p>
                            <p class='text-primary-foreground pt-[18px]'>In a smaller living space, less is often more.
                                Embrace minimalism by selecting furniture with clean lines, uncluttered surfaces, and a
                                neutral color palette. A minimalist to approach not only creates a sleek and open
                                environment but also instills an sense of calm and tranquility in your apartment.</p>
                        </div>

                        <div class='pt-[54px] flex gap-3 flex-wrap'>
                            @foreach($tagList as $tag)
                                <x-ui.link href="">
                                    <x-ui.buttons.button-outline class="font-normal px-2.5 sm:py-[5px] py-[5px] border">
                                        <span class='text-lg'>{{$tag['tag']}}</span>
                                    </x-ui.buttons.button-outline>
                                </x-ui.link>
                            @endforeach
                        </div>
                        <div class='flex gap-7 items-center pt-7.5'>
                            <strong>Share on:</strong>
                            <x-ui.social-media-list/>
                        </div>
                        <hr class='mt-[22px] mb-12.5'/>
                    </div>
                    <x-ui.side-bar :blogData="$blogs"/>
                </div>
                <x-ui.next-prev-post/>
                <hr class='mt-12.5 mb-17.5 max-w-[830px] w-full'/>
                <x-ui.comments/>
                <x-ui.leave-comment/>
                <div>
                    <h2 class='[font-size:_clamp(33px,5vw,48px)] font-bold leading-120 text-primary-foreground pb-[32px]'>
                        Related Post</h2>
                    <x-section.blog-slider :data="array_slice($blogs,0, 4)"/>
                </div>
            </div>
        </section>
        <x-section.feedback/>
    </main>
    <x-footer/>
</x-layouts.app>

