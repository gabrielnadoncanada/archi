@props(['data'])

<div class="group">
    <div class="relative">
        <div class="absolute z-10 w-full h-full flex justify-center items-center opacity-0 group-hover:opacity-100 transition-all duration-500">
            <button onclick="dispatch('addToCart', { id: '{{ $data['id'] }}', quantity: 1, img: '{{ $data['image'] }}', name: '{{ $data['title'] }}', price: '{{ $data['price'] }}' })"
                    class="px-[25px] py-2.5 flex items-center gap-2.5 border-white hover:border-primary text-white border-2 whitespace-nowrap relative z-10 overflow-hidden after:absolute after:left-0 after:top-0 after:bottom-0 after:z-[-1] after:bg-primary  after:w-0 after:transition-all after:duration-500 hover:after:w-full text-secondary-foreground hover:text-secondary-foreground transition-all duration-500">
                Learn more
                <x-icons.shop-cart height="24" width="24"/>
            </button>
        </div>
        <div class="relative after:absolute after:top-1/2 after:left-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:transition-all after:duration-500 after:group-hover:w-full after:group-hover:h-full after:group-hover:opacity-100 after:h-0 after:w-0 after:opacity-0 after:flex after:justify-center after:items-center after:bg-[rgba(37,_59,_47,_0.38)] after:group-hover:blur-sm">
            <img src="{{ Storage::url($data['image']) }}" loading="lazy" alt="{{ $data['title'] }}" class="w-full h-full max-h-[506px]"/>
        </div>
    </div>
    <div class="mt-[21px] flex justify-between">
        <div>
            <a href="/product-single"
               class="text-2xl font-semibold text-primary-foreground leading-160 hover-underline ">
                <span>{{ $data['title'] }}</span>
            </a>
            <p class="text-2xl text-primary-foreground ">${{ $data['price'] }}</p>
        </div>
        <div class="mt-2">
            <x-ui.rating :star="$data['rating']" />
        </div>
    </div>
</div>
