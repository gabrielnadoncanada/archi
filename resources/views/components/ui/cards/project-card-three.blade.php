@props(['data'])

<div class="relative hover-underline">
    <img src="{{ $data['image'] }}" loading="lazy" alt="portfolio_1" />
    <div class="absolute bottom-0 left-0 w-full h-full bg-white-liner flex items-end px-7.5 pb-6">
        <a href="/project-single">
            <span class="md:text-4xl sm:text-3xl text-2xl font-bold">{{ $data['title'] }}</span>
        </a>
    </div>
</div>
