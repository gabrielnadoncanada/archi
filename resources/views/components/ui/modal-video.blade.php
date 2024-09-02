@props(['isOpen', 'videoId', 'channel' => 'youtube', 'youtube' => ['mute' => 0, 'autoplay' => 0]])

@php
    $videoUrls = [
        'youtube' => "https://www.youtube.com/embed/$videoId?mute={$youtube['mute']}&autoplay={$youtube['autoplay']}",
        // Add more video channels here if needed
    ];
@endphp

@if($isOpen)
    <div x-show="isOpen" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-75">
        <div class="relative bg-white rounded-lg shadow-lg w-full max-w-4xl">
            <button @click="isOpen = false" class="absolute top-4 right-4 text-black text-xl">
                &times;
            </button>
            <div class="relative w-full h-0 pb-16/9">
                <iframe
                    class="absolute top-0 left-0 w-full h-full"
                    src="{{ $videoUrls[$channel] ?? '' }}"
                    frameborder="0"
                    allow="autoplay; encrypted-media"
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>
@endif
