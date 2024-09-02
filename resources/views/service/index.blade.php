<x-layouts.app>
    <x-header.header-one class="!static"/>
    <main>

        <x-section.about.about-three/>
        <x-section.expertise/>
        <x-section.faq :data="$faqs"/>
        <x-section.feedback/>
    </main>
    <x-footer/>
</x-layouts.app>

