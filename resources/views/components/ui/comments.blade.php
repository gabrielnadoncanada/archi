@php
    $team_1 = asset('images/team-1.jpg');
    $team_2 = asset('images/team-2.jpg');
@endphp

<div {{ $attributes->merge(['class' => 'grid 2xl:grid-cols-[auto_25%] lg:grid-cols-[auto_32%] 2xl:gap-[143px] lg:gap-16 pb-20']) }}>
    <div>
        <h2 class="text-primary-foreground pb-7.5 font-bold [font-size:_clamp(33px,5vw,48px)]">Comments (32)</h2>
        <div class="flex 2sm:gap-7.5 gap-4">
            <x-ui.link href="">
                <x-ui.image src="{{ $team_1 }}" loading="lazy" alt="Philip Reyes" class="max-w-20 max-h-20 object-cover"/>
            </x-ui.link>
            <div>
                <x-ui.link href="" class="text-2xl font-bold leading-[80%]">Philip Reyes</x-ui.link>
                <p>Small apartments can be a canvas for creativity and innovation. By following these tips and making
                    thoughtful design choices, you can transform your compact living space into a int functional,
                    inviting</p>
                <span class="font-bold">Reply</span>
            </div>
        </div>
        <div class="flex 2sm:gap-7.5 gap-4 2sm:ml-28 ml-10 pt-10">
            <x-ui.link href="">
                <x-ui.image src="{{ $team_2 }}" loading="lazy" alt="Philip Reyes" class="max-w-20 max-h-20 object-cover"/>
            </x-ui.link>
            <div>
                <x-ui.link href="" class="text-2xl font-bold leading-[80%]">Mark Anderson</x-ui.link>
                <p>Small apartments can be a canvas for creativity and innovation. By following these tips and making
                    thoughtful design choices, you can transform your compact living space into a int functional,
                    inviting</p>
                <span class="font-bold">Reply</span>
            </div>
        </div>
    </div>
</div>
