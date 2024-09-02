@props(['data'])
<li class="bg-secondary grid lg:grid-cols-[8%_25%_20%_20%_auto] lg:gap-y-0 gap-y-6 justify-between items-center mb-7.5 py-8 px-7.5 border border-primary">
    <svg stroke-width="1"
         class="h-[65px] w-20 relative -top-2 left-0 xl:text-6xl text-5xl inline-block font-extrabold leading-120 stroke-primary stroke-dasharray-1000 stroke-dashoffset-1000 animate-text-line-animation">
        <text x="0%" dominant-baseline="middle" y="70%">{{ $data['id'] }}</text>
    </svg>
    <div class="max-w-72 w-full">
        <strong class="text-primary-foreground">{{ $data['time'] }}</strong>
        <h2 class="text-2xl font-bold leading-160 text-primary-foreground">{{ $data['title'] }}</h2>
    </div>
    <div>
        <strong class="text-primary-foreground">{{ $data['location'] }}</strong>
        <p class="text-primary-foreground">
            <span>Apply before:</span>
            <span class="font-bold whitespace-nowrap">{{ $data['date_line'] }}</span>
        </p>
    </div>
    <div>
        <strong class="text-primary-foreground">{{ $data['level'] }}</strong>
        <p class="text-primary-foreground flex gap-2">
            <span>{{ $data['salary']['range'] }}</span> / <span class="font-bold">{{ $data['salary']['time'] }}</span>
        </p>
    </div>
    <a href="{{ $data['slug'] }}">
        <x-ui.buttons.button-fill class="px-7.5 py-2.5">Apply Now</x-ui.buttons.button-fill>
    </a>
</li>
