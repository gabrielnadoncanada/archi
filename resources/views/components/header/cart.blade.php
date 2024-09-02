@props([
    'cartActive' => false,
    'products' => [],
])
@php
    $totalPrice = array_reduce($products, function ($total, $product) {
        return $total + $product['price'] * $product['quantity'];
    }, 0);
@endphp

<div>
    <div @click="setCartActive(false)" :class="{'visible': cartActive, 'invisible': !cartActive}" class="bg-overlay h-full fixed z-30 right-0 top-0 transition-all w-full"></div>
    <div :class="{'right-0': cartActive, '-right-full': !cartActive}" class="bg-background 2sm:px-17.5 px-5 2sm:py-30 py-16 max-w-[552px] max-h-screen min-h-screen overflow-y-auto w-full fixed z-40 top-0 transition-all duration-700">
        <div class="flex justify-between items-center">
            <h5 class="text-xl font-bold text-primary-foreground">Your Cart ({{ count($products) }})</h5>
            <p @click="setCartActive(false)" class="text-xl font-bold cursor-pointer text-primary-foreground">Close (X)</p>
        </div>
        <div class="flex flex-col justify-between h-[calc(100vh - 270px)]">
            <div class="mt-[62px]">
                @if (count($products) === 0)
                    <h3 class="text-4xl 2sm:text-6xl font-extrabold">No Product in your cart</h3>
                @else
                    <ul>
                        @foreach ($products as $product)
                            <li class="flex items-center justify-between mb-[22px] last:mb-0">
                                <div class="flex items-center gap-6">
                                    <img src="{{ $product['product_img'] }}" loading="lazy" width="106" height="126" alt="shop img" />
                                    <div>
                                        <p class="text-xl font-bold mb-[13px] text-primary-foreground">{{ $product['product_name'] }}</p>
                                        <span class="text-lg inline-block text-primary-foreground">Qty <span class="font-bold text-xl inline-block ml-[22px]">{{ $product['quantity'] }}</span></span>
                                    </div>
                                </div>
                                <div>
                                    <p @click="dispatch('removeToCart', {{ $product['id'] }})" class="text-xl mb-[13px] text-end cursor-pointer text-primary-foreground">(X)</p>
                                    <span class="text-xl font-bold text-end text-primary-foreground">${{ $product['price'] }}</span>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
            <div class="mt-14">
                <div class="flex justify-between items-center">
                    <h5 class="text-xl font-bold text-primary-foreground">Subtotal:</h5>
                    <h5 class="text-xl font-bold text-primary-foreground">${{ $totalPrice }}</h5>
                </div>
                <div class="mt-7 flex gap-[27px] items-center">
                    <x-ui.buttons.button-fill class="px-7.5 py-2.5 w-full justify-center">View Cart</x-ui.buttons.button-fill>
                    <x-ui.buttons.button-fill class="px-7.5 py-2.5 w-full justify-center after:bg-secondary text-primary-foreground">Checkout</x-ui.buttons.button-fill>
                </div>
            </div>
        </div>
    </div>
</div>
