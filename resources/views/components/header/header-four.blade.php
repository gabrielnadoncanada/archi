@php

    $menuListTwo = [
        [
            'id' => 1,
            'name' => 'Home',
            'path' => '#',
            'isMegaMenu' => false,
            'isDropdown' => [
                ['id' => 1, 'name' => 'Home 1', 'path' => '/home-1'],
                ['id' => 2, 'name' => 'Home 2', 'path' => '/home-2'],
                ['id' => 3, 'name' => 'Home 3', 'path' => '/home-3'],
                ['id' => 4, 'name' => 'Home 4', 'path' => '/home-4'],
            ],
        ],
        [
            'id' => 2,
            'name' => 'Projects',
            'path' => '/project-archive',
            'isMegaMenu' => false,
            'isDropdown' => false,
        ],
        [
            'id' => 3,
            'name' => 'Services',
            'path' => '#',
            'isDropdown' => false,
            'isMegaMenu' => [
                [
                    'id' => 1,
                    'menus' => [
                        ['id' => 1, 'name' => 'Residential Design', 'path' => '/service-single', 'desc' => 'Everything from concept to completion'],
                        ['id' => 2, 'name' => 'Commercial Design', 'path' => '/service-single', 'desc' => 'Focuses on optimizing functionality and aesthetics'],
                        ['id' => 3, 'name' => 'Space Planning', 'path' => '/service-single', 'desc' => 'Maximize the potential of your space'],
                    ],
                ],
                [
                    'id' => 2,
                    'menus' => [
                        ['id' => 4, 'name' => 'Color Consultation', 'path' => '/service-single', 'desc' => 'We help you choose the perfect palette'],
                        ['id' => 5, 'name' => 'Project Management', 'path' => '/service-single', 'desc' => 'We oversee every detail for a successful project'],
                        ['id' => 6, 'name' => 'Custom Furnishings', 'path' => '/service-single', 'desc' => 'Elevate your space with unique furnishings'],
                    ],
                ],
                [
                    'id' => 5,
                    'menus' => [
                        ['id' => 9, 'name' => 'Embark on a Design Journey with Us', 'path' => '#', 'desc' => 'Let’s Talk', 'img' => asset('images/menu-image-2.png')],
                    ],
                ],
            ],
        ],
        [
            'id' => 4,
            'name' => 'Pages',
            'path' => '#',
            'isMegaMenu' => false,
            'isDropdown' => [
                ['id' => 1, 'name' => 'About Us', 'path' => '/about-us'],
                ['id' => 2, 'name' => 'Services', 'path' => '/services'],
                ['id' => 4, 'name' => 'Project Single', 'path' => '/project-single'],
                ['id' => 5, 'name' => 'Product Single', 'path' => '/product-single'],
                ['id' => 6, 'name' => 'Product Archive', 'path' => '/product-archive'],
                ['id' => 7, 'name' => 'Career', 'path' => '/career'],
                ['id' => 8, 'name' => 'Job Details', 'path' => '/job-details'],
                ['id' => 9, 'name' => 'Team', 'path' => '/team'],
                ['id' => 10, 'name' => 'Team Single', 'path' => '/team-single'],
                ['id' => 11, 'name' => 'Contact', 'path' => '/contact'],
            ],
        ],
        [
            'id' => 5,
            'name' => 'Blog',
            'path' => '#',
            'isMegaMenu' => false,
            'isDropdown' => [
                ['id' => 1, 'name' => 'Blog Archive', 'path' => '/blog-archive'],
                ['id' => 2, 'name' => 'Blog Single', 'path' => '/blog-single'],
                ['id' => 3, 'name' => 'Blog Left Sidebar', 'path' => '/blog-left-sidebar'],
                ['id' => 4, 'name' => 'Blog Right Sidebar', 'path' => '/blog-right-sidebar'],
            ],
        ],
        [
            'id' => 6,
            'name' => 'Contact',
            'path' => '/contact',
            'isMegaMenu' => false,
            'isDropdown' => false,
        ],
    ];
@endphp

<header class="absolute z-50 top-0 left-0 w-full bg-gray overflow-x-clip">
    <div class="hidden xl:block">
        <x-top-navbar />
    </div>
    <div class="border-border border-t border-b hidden xl:block container-fluid">
        <div class="bottom-navbar">
            <div class="relative flex justify-between items-center">
                <div>
                    <a href="/" class="text-primary-foreground">
                        <x-icons.logo height="31" width="219" />
                    </a>
                </div>
                <nav>
                    <ul class="flex items-center">
                        @foreach ($menuListTwo as $menu)
                            <li class="group">
                                <a href="{{ $menu['path'] }}" data-id="{{ $menu['id'] }}" class="nav-link text-xl font-medium px-7 py-[34px] flex items-center gap-2 group-hover:bg-muted group-hover:text-secondary-foreground">
                                    {{ $menu['name'] }}
                                    @if ($menu['isDropdown'] || $menu['isMegaMenu'])
                                        <span class="transition-all duration-500 rotate-180 group-hover:rotate-0 group-hover:text-secondary-foreground">
                                            <svg width="12" height="9" viewBox="0 0 12 9" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11 8L6 2L1 8" />
                                            </svg>
                                        </span>
                                    @endif
                                </a>
                                @if (count($menu['isDropdown']))
                                    <x-dropdown-menu :dropDownList="$menu['isDropdown']" parentId="{{ $menu['id'] }}" bgColor="bg-muted" />
                                @endif
                                @if (count($menu['isMegaMenu']))
                                    <x-mega-menu-two :dropDownList="$menu['isMegaMenu']" parentId="{{ $menu['id'] }}" />
                                @endif
                            </li>
                        @endforeach
                        <li class="other_icon text-primary-foreground px-6 cursor-pointer" @click="offcanvaseActive = true">
                            <x-icons.search height="24" width="24" />
                        </li>
                        <li class="other_icon text-primary-foreground pl-6 relative cursor-pointer flex items-center" @click="cartActive = true">
                            <x-icons.shop-cart height="24" width="24" />
                            @if (count($products))
                                <span class="font-medium flex items-center justify-center text-secondary-foreground text-sm absolute -top-3 -right-4 w-6 h-6 bg-primary rounded-full">
                                    {{ count($products) }}
                                </span>
                            @endif
                        </li>
                    </ul>
                </nav>
            </div>
{{--            <x-offcanvas :active="offcanvaseActive" @close="offcanvaseActive = false"  />--}}
{{--            <x-cart :active="cartActive" @close="cartActive = false" />--}}
        </div>
    </div>
    <div class="xl:hidden block">
        <x-mobile-navbar  />
    </div>
</header>
