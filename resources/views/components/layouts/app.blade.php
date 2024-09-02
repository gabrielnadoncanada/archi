<!doctype html>
<html lang="en" x-data="{isMenuActive: false}" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Application')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
          rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles


</head>
<body :class="{'overflow-y-hidden': isMenuActive }">
<div id="page-wapper" class="!relative ">
    <div class="w-full h-full fixed -z-[1] top-0 left-0 page-lines">
        <div class="container relative h-full"><span
                class="absolute left-3 top-0 h-full w-[1px] bg-secondary_rgba"></span><span
                class="absolute right-[28%] top-0 h-full w-[1px] bg-secondary_rgba"></span><span
                class="absolute right-3 top-0 h-full w-[1px] bg-secondary_rgba"></span></div>
    </div>

    <x-ui.scroll-circle/>
    {{$slot}}

</div>

@livewireScripts
</body>
</html>
