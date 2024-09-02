@props([
    'order' => '',
    'categoriesList' => [],
    'tagList' => [],
    'recentPostData' => [],
    'blogData' => []
    ])
@php
    $categoriesList = [
        ['id' => '1', 'categories' => 'Design Inspiration', 'post' => '15'],
        ['id' => '2', 'categories' => 'Room Makeovers', 'post' => '7'],
        ['id' => '3', 'categories' => 'Color and Decor', 'post' => '8'],
        ['id' => '4', 'categories' => 'Home Improvement', 'post' => '20'],
        ['id' => '5', 'categories' => 'Sustainable Design', 'post' => '4'],
        ['id' => '6', 'categories' => 'Art and Decor', 'post' => '9'],
        ['id' => '7', 'categories' => 'Space Planning', 'post' => '15'],
        ['id' => '8', 'categories' => 'Client Success Stories', 'post' => '25'],
        ['id' => '9', 'categories' => 'Design Trends', 'post' => '3'],
    ];

    $tagList = [
        ['id' => 1, 'tag' => 'Color Schemes', 'link' => ''],
        ['id' => 2, 'tag' => 'Furniture Design', 'link' => ''],
        ['id' => 3, 'tag' => 'DIY Projects', 'link' => ''],
        ['id' => 4, 'tag' => 'Space Planning', 'link' => ''],
        ['id' => 5, 'tag' => 'Styling Tips', 'link' => ''],
        ['id' => 6, 'tag' => 'Art and Decor', 'link' => ''],
        ['id' => 7, 'tag' => 'Modern Living', 'link' => ''],
        ['id' => 8, 'tag' => 'Renovations', 'link' => ''],
        ['id' => 9, 'tag' => 'Vintage Style', 'link' => ''],
    ];

    $recentPostData = [
        ['id' => 1, 'title' => 'The Modern Home Office: Designing...', 'date' => ''],
    ];
@endphp

<div class="lg:sticky lg:top-16 lg:pb-16 {{ $order }}">
    <div>
        <h1 class="[font-size:_clamp(33px,5vw,48px)] font-semibold leading-[100%] text-primary-foreground mb-[30px]">
            Search</h1>
        <x-ui.input-field placeholder="Type & Hit Enter" type="text"/>
    </div>

    <div class="pt-17.5">
        <h1 class="[font-size:_clamp(33px,5vw,48px)] font-semibold leading-[100%] text-primary-foreground mb-[30px]">
            Categories</h1>
        <ul>
            @foreach ($categoriesList as $category)
                <li class="text-primary-foreground flex items-center gap-[27px] mb-[22px] last:mb-0">
                    <x-icons.right-arrow width="35" height="22"/>
                    <a href=""
                       class="text-xl leading-160 inline-block relative after:absolute after:left-0 after:bottom-0 after:w-0 after:h-[1px] after:bg-primary after:transition-all after:duration-500 hover:after:w-full">
                        <span class="font-medium text-primary-foreground">{{ $category['categories'] }}</span>
                        <span class="font-bold text-primary-foreground">({{ $category['post'] }})</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="pt-17.5">
        <h1 class="[font-size:_clamp(33px,5vw,48px)] font-semibold leading-[100%] text-primary-foreground mb-[30px] last:mb-0">
            Tags</h1>
        <div class="flex gap-3 flex-wrap">
            @foreach ($tagList as $tag)
                <a href="">
                    <x-ui.buttons.button-outline class="font-normal px-2.5 sm:py-[5px] py-[5px] border">
                        <span class="text-lg">{{ $tag['tag'] }}</span>
                    </x-ui.buttons.button-outline>
                </a>
            @endforeach
        </div>
    </div>

    <div class="pt-17.5">
        <h1 class="[font-size:_clamp(33px,5vw,48px)] font-semibold leading-[100%] text-primary-foreground mb-[30px] last:mb-0">
            Recent Posts</h1>
        @foreach (array_slice($blogData,0,3) as $post)
            <div class="flex gap-[26px] mb-7.5 last:mb-0">
                <div class="max-w-[162px]">
                    <img src="{{ $post['thumb'] }}" alt="{{ $post['title'] }}" loading="lazy"/>
                </div>
                <div>
                    <a href="/blog-single" class="hover-underline text-2xl leading-120 font-semibold">
                        <span>{{ strlen($post['title']) > 25 ? substr($post['title'], 0, 25) . '...' : $post['title'] }}</span>
                    </a>
                    <p class="text-primary">{{ $post['date'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
