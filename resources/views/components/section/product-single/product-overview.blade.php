@props(['data'])
<section>
    <div>
        <h2 class="[font-size:_clamp(30px,4vw,48px)] font-bold leading-120 text-primary-foreground">{{ $data['title'] }}</h2>
        <div class="mb-[22px] mt-3 flex justify-between">
{{--            <h5 class="text-2xl font-bold text-primary-foreground">${{ $data['price'] }}</h5>--}}
            <div class="flex items-center gap-2 cursor-pointer">
{{--                <x-ui.rating :star="$data['rating']" />--}}
{{--                <span class="font-semibold">(13 reviews)</span>--}}
            </div>
        </div>
        <p>{{ $data['overview'] }}</p>
        <div class="flex sm:flex-row flex-col gap-[18px] mt-[45px] sm:max-w-full max-w-56">
{{--            <div class="px-4 flex items-center justify-center gap-2 border-[2px] border-primary sm:w-full min-h-14 max-w-44">--}}
{{--                <span class="cursor-pointer h-full flex justify-center items-center py-3 px-7" @click="productQuantity > 1 ? productQuantity-- : null">--}}
{{--                    <x-icons.minus />--}}
{{--                </span>--}}
{{--                <input type="number" x-model="productQuantity" class="text-2xl font-bold max-w-8 text-center outline-none flex justify-center border-0" readonly />--}}
{{--                <span class="cursor-pointer h-full flex justify-center items-center py-3 px-7" @click="productQuantity++">--}}
{{--                    <x-icons.plus />--}}
{{--                </span>--}}
{{--            </div>--}}
            <x-ui.buttons.button-fill @click="addToCart({{ $data['id'] }}, productQuantity, '{{ $data['image'] }}', '{{ $data['title'] }}', {{ $data['price'] }})" class="px-7.5">
                Request more information
            </x-ui.buttons.button-fill>
        </div>
        <ul class="mt-[45px]">
{{--            <li class="text-lg flex gap-2 mb-2.5">--}}
{{--                <span class="min-w-[111px] inline-block">SKU: </span>--}}
{{--                <span>005</span>--}}
{{--            </li>--}}
            <li class="text-lg flex gap-2 mb-2.5">
                <span class="min-w-[111px] inline-block">CATEGORY: </span>
                <a href="#" class="relative inline-block after:absolute after:left-0 after:bottom-1 after:w-full after:h-[1px] after:bg-primary hover-underline">ACCESSORIES</a>
            </li>
            <li class="text-lg flex gap-2">
                <span class="min-w-[111px] inline-block">TAGS: </span>
                <a href="#" class="relative inline-block after:absolute after:left-0 after:bottom-1 after:w-full after:h-[1px] after:bg-primary hover-underline">LAMP</a>,
                <a href="#" class="relative inline-block after:absolute after:left-0 after:bottom-1 after:w-full after:h-[1px] after:bg-primary hover-underline">LIGHTING</a>
            </li>
        </ul>
    </div>
</section>
