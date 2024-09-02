@props([
    'products' => null,
])

@php
    $menuList = [
        [
            'id' => 1,
            'name' => 'Home',
            'path' => '#',
            'isMegaMenu' => false,
            'isDropdown' => [
                ['id' => 1, 'name' => 'Home 1', 'path' => '/'],
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
                    'id' => 3,
                    'menus' => [
                        ['id' => 7, 'name' => 'Concept Development', 'path' => '/service-single', 'desc' => 'Develop a design concept'],
                        ['id' => 8, 'name' => 'Revamps & Remodels', 'path' => '/service-single', 'desc' => 'Renovation and remodeling services that breathe new life'],
                    ],
                ],
                [
                    'id' => 5,
                    'menus' => [
                        ['id' => 9, 'name' => 'Embark on a Design Journey with Us', 'path' => '#', 'desc' => 'Let’s Talk', 'img' => asset('images/menu-image-1.png')],
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
                ['id' => 11, 'name' => 'Contact 2', 'path' => '/contact-2'],
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

<div class="mobile-navbar">
    <div class="bg-[#f9f9f9] relative overflow-x-clip px-2.5 h-[72px]">
        <div class="container-fluid">
            <div class="flex items-center justify-between py-5">
                <a href="/" class="text-primary-foreground">
                    <x-icons.logo height="31" width="219" />
                </a>
                <div>
                    <div class="text-primary-foreground" @click="isMenuActive = !isMenuActive">
                        <x-icons.menu class="cursor-pointer" />
                    </div>
                </div>
            </div>
        </div>
{{--        <x-offcanvas :active="offcanvaseActive" @close="offcanvaseActive = false" />--}}
{{--        <x-cart :active="cartActive" @close="cartActive = false" />--}}
    </div>
    <nav :class="{'right-0': isMenuActive, 'sm:-right-full -right-[150%]': !isMenuActive}"
         class="w-full h-[calc(100vh-72px)] overflow-y-auto bg-[#f9f9f9] absolute transition-all duration-500  z-50 container-fluid ">


        <ul class="mt-7">
            @foreach ($menuList as $menu)
                <li @click="handleDropDown({{ $menu['id'] }}, {{ $menu['isDropdown'] ? count($menu['isDropdown']) : '' }}, {{ $menu['isMegaMenu'] ? count($menu['isMegaMenu']) : '' }})">
                    <a href="{{ $menu['path'] }}" data-id="{{ $menu['id'] }}" class="nav-link text-xl font-medium px-4 py-4 flex items-center gap-2 transition-all duration-500 text-primary-foreground" :class="{'bg-primary text-secondary-foreground': dropDownActive === {{ $menu['id'] }}}">
                        {{ $menu['name'] }}
                        @if ($menu['isDropdown']|| $menu['isMegaMenu'])
                            <span class="transition-all duration-500 rotate-180" :class="{'rotate-0 text-secondary-foreground': dropDownActive === {{ $menu['id'] }}}">
                                                <svg width="12" height="9" viewBox="0 0 12 9" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11 8L6 2L1 8" />
                                                </svg>
                                            </span>
                        @endif
                    </a>
                    @if ($menu['isDropdown'])
                        <ul :class="{'max-h-[500px] bg-primary text-secondary-foreground': dropDownActive === {{ $menu['id'] }}}" class="transition-all duration-500 max-h-0 overflow-hidden px-4 pb-2">
                            @foreach ($menu['isDropdown'] as $dropdown)
                                <li class="leading-10">
                                    <a data-id="{{ $menu['id'] }}" @click="isMenuActive = false" href="{{ $dropdown['path'] }}" class="dropdown-item text-secondary-foreground text-xl font-medium inline-block relative after:transition-all after:duration-700 after:absolute after:left-0 after:bottom-0 after:contents-[''] after:w-0 after:h-[2px] after:bg-secondary hover:after:w-full">
                                        {{ $dropdown['name'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                    @if ($menu['isMegaMenu'])
                        <ul :class="{'max-h-[700px] bg-primary text-secondary-foreground': dropDownActive === {{ $menu['id'] }}}" class="transition-all duration-500 max-h-0 overflow-hidden px-4 pb-2">
                            @foreach ($menu['isMegaMenu'] as $megaMenu)
                                <ul>
                                    @foreach ($megaMenu['menus'] as $item)
                                        <li class="pb-5">
                                            <a data-id="{{ $menu['id'] }}" @click="isMenuActive = false" href="{{ $item['path'] }}" class="dropdown-item text-secondary-foreground text-xl font-medium inline-block relative after:transition-all after:duration-700 after:absolute after:left-0 after:bottom-0 after:contents-[''] after:w-0 after:h-[2px] after:bg-secondary hover:after:w-full">
                                                {{ $item['name'] }}
                                            </a>
                                            <span class="block text-secondary-foreground_rgba text-sm">{{ $item['desc'] }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach

        </ul>
        <div class="flex items-center pt-5">
            <div class="text-primary-foreground px-6 cursor-pointer" @click="setOffcanvaseActive(true); setIsMenuActive(false)">
                <x-icons.search height="24" width="24" />
            </div>
            <div class="text-primary-foreground pl-6 flex items-center relative cursor-pointer" @click="setCartActive(true); setIsMenuActive(false)">
                <x-icons.shop-cart height="24" width="24" />
                @if ($products && count($products))
                    <span class="font-medium flex items-center justify-center text-secondary-foreground text-sm absolute -top-3 -right-4 w-6 h-6 bg-primary rounded-full">
                                            {{ count($products) }}
                                        </span>
                @endif
            </div>
        </div>
    </nav>
</div>
