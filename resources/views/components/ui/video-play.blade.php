@props(['img'])

@php
    $cardSlideAnimation = [
        'offscreen' => ['opacity' => 0, 'y' => 50],
        'onscreen' => ['opacity' => 1, 'y' => 0, 'transition' => ['duration' => 0.5]]
    ];
@endphp

<div {{ $attributes->merge(['class' => 'relative max-h-[400px] mt-10 lg:mt-0']) }}
     x-data="{ isOpen: false }"
     x-init="$watch('isOpen', value => document.body.style.overflow = value ? 'hidden' : 'auto')">
    <div
        class="relative max-h-[400px] mt-10 lg:mt-0"
    >
        <x-image :src="$img" loading="lazy" alt="video" class="w-full max-w-[698px] mx-auto h-full"/>
        <x-ui.modal-video
            channel="youtube"
            :youtube="[ 'mute' => 0, 'autoplay' => 0 ]"

            video-id="lfDZJqSrIuk"
            @close="isOpen = false"
        />

        <div @click="isOpen = true"
             class="md:w-[109px] md:h-[109px] w-24 h-24 rounded-full text-primary-foreground absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-[#D9D9D9]/[.78] cursor-pointer flex justify-center items-center">
            <span class="ml-2.5">
                <x-play-icon width="30" height="36"/>
            </span>
        </div>
    </div>
</div>
