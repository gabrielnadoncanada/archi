
@php
    $counterList = [
        [
            'id' => 1,
            'count' => '12',
            'title' => 'Years of Experience'
        ],
        [
            'id' => 2,
            'count' => '182+',
            'title' => 'Projects Completed'
        ],
        [
            'id' => 3,
            'count' => '425k',
            'title' => 'Square Feet covered'
        ],
        [
            'id' => 4,
            'count' => '93%',
            'title' => 'Positive Feedbacks'
        ],
    ];
@endphp

<div {{ $attributes->merge(['class' => 'pt-20']) }}>
    <div class="container">
        <ul class="grid xl:grid-cols-4 lg:grid-cols-3 grid-cols-2 gap-10">
            @foreach ($counterList as $counter)
                <li class="flex flex-col">
                    <span
                        class="[font-size:_clamp(48px,9vw,90px)] font-extrabold text-primary-foreground leading-120 overflow-y-hidden overflow-x-auto ">
{{--                        <x-slot-counter--}}
{{--                            start-value="0" value="{{ $counter['count'] }}" debounce-delay="5000"--}}
{{--                                        duration="2"--}}
{{--                                        animate-on-visible="{ triggerOnce: true, rootMargin: '0px 0px -100px 0px' }"/>--}}
                    </span>
                    <span class="w-[150px] h-[1px] bg-primary 2sm:mt-3.5 2sm:mb-4 mt-1 mb-2"></span>
                    <span
                        class="2sm:text-2xl text-xl font-bold text-primary-foreground ">{{ $counter['title'] }}</span>
                </li>
            @endforeach
        </ul>
    </div>
</div>
