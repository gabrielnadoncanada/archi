<x-layouts.app>
    <x-header.header-one class="!static"/>
    <main>
        <div class='container-fluid'>
            <div class='bg-secondary pt-[94px] pb-[130px]'>
                <div class='container'>
                    <h2 class='[font-size:_clamp(40px,7vw,90px)] leading-120 text-primary-foreground font-extrabold max-w-[768px]'>
                        Senior Interior Designer</h2>
                    <div class='flex 2sm:flex-row flex-col justify-between pt-11'>
                        <div class='flex sm:flex-row flex-col justify-between lg:basis-1/2 basis-[65%]'>
                            <div>
                                <strong class='text-primary-foreground'>USA,California</strong>
                                <p class='text-primary-foreground'><span>Apply before:</span> <span
                                        class='font-bold whitespace-nowrap'> 28 Feb 2024</span></p>
                            </div>
                            <div class='2sm:mt-0 mt-6'>
                                <strong class='text-primary-foreground'>Expert</strong>
                                <p class='text-primary-foreground flex gap-2'><span>$45k - $60k </span>/ <span
                                        class='font-bold'>year</span></p>
                            </div>
                        </div>
                        <div class='2sm:mt-0 mt-6'>
                            <x-ui.link href="">
                                <x-ui.buttons.button-fill class="px-7.5 py-2.5 after:left-0">Apply Now
                                </x-ui.buttons.button-fill>
                            </x-ui.link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='container pt-30'>
            <div class='grid lg:grid-cols-[auto_427px] xl:gap-x-[132px] gap-x-10 items-start'>
                <div>
                    <div>
                        <x-ui.title title_text="Job Description"/>
                        <p>One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than
                            others - which creates a distinct visual impression. Moreover, in Latin only words at the
                            beginning of sentences are capitalized.</p>
                        <p class='pt-7'>This means that Lorem Ipsum cannot accurately represent, for example, German, in
                            which all nouns are capitalized. Thus, Lorem Ipsum has only limited suitability as a visual
                            filler for German texts. If the fill text is intended to illustrate the characteristics of
                            different typefaces.</p>
                        <p class='pt-7'>It sometimes makes sense to select texts containing the various letters and
                            symbols specific to the output language.</p>
                    </div>
                    <div class='pt-7.5'>
                        @foreach ($requirements as $key => $data)
                            <div>
                                <h5 class='font-bold'>{{$data['requrment']}}</h5>
                                <ul class='2sm:ml-[132px] sm:ml-20 ml-10 py-7 list-disc'>
                                    @foreach ($data['keys'] as $key)
                                        <li class='mb-6 last:mb-0'>{{$key}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endforeach
                    </div>
                </div>
                <x-ui.job-details-sidebar/>
            </div>
            <div class='pt-15 pb-30'>
                <x-ui.title title_text="Other Jobs"/>
                <ul>
                    @foreach ($jobs as $data)
                        <x-ui.cards.job-post-card :data="$data"/>
                    @endforeach
                </ul>
            </div>
        </div>
    </main>
    <x-footer/>
</x-layouts.app>



