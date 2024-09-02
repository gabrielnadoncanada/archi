<div x-data="Components.modal()">
    <div x-show="isOpen"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 transform "
         x-transition:enter-end="opacity-100 transform scale-100"
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="opacity-100 transform scale-100"
         x-transition:leave-end="opacity-0 transform scale-90"
         @click="close()"
         @open-modal-{{$id}}.window="open()" @close-modal-{{$id}}.window="close()"
         class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-75">
        <div class="relative bg-white rounded-lg shadow-lg w-full max-w-4xl">
            <button @click="close()" class="absolute top-4 right-4 text-black text-xl">
                &times;
            </button>
            <div class="relative w-full aspect-video">
                {{$slot}}
            </div>
        </div>
    </div>
</div>
