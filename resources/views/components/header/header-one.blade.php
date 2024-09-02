<header {{$attributes->merge(['class' => 'absolute z-[60] top-0 left-0 w-full bg-gray overflow-x-clip header-one'])}}>
    <div class="hidden xl:block">
        <x-header.top-navbar />
    </div>
    <div class="border-border border-t border-b hidden xl:block">
        <div class="container-fluid">
            <x-header.bottom-navbar />
        </div>
    </div>
    <div class="xl:hidden block">
{{--        <x-header.mobile-navbar />--}}
    </div>
</header>
