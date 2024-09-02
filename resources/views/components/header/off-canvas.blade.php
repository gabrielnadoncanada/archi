
<div
    :class="offcanvaseActive ? 'top-0 visible' : '-top-[400%] invisible'"
    class="w-full min-h-screen h-full bg-primary fixed z-40 left-0 transition-all duration-700">
    <div class="w-full relative">
        <button @click="setOffcanvaseActive(false)" class="absolute right-10 top-10 text-secondary-foreground">
            <x-icons.close />
        </button>
    </div>
    <hr />
    <form class="container h-full mx-auto flex justify-center flex-col">
        <h1 class="[font-size:_clamp(90px,14vw,200px)] font-extrabold text-secondary-foreground leading-[100%] mb-5">Search</h1>
        <div class="relative">
            <input type="text" placeholder="Type & Hit Enter" required class="w-full border-[1.5px] border-secondary bg-transparent outline-none px-9 py-[19px] 2sm:text-[35px] text-2xl font-medium text-secondary_rgba placeholder:text-secondary-foreground_rgba" />
            <span class="text-secondary-foreground absolute right-7 top-1/2 -translate-y-1/2 cursor-pointer">
                <x-icons.search height="38" width="38" />
            </span>
        </div>
    </form>
</div>
