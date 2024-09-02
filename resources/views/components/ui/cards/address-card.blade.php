@props(['data' => []])

<div class="-mt-6 lg:-mt-0">
    <x-ui.outline-svg-text :text="$data['id']"/>
    <x-ui.title :title_text="$data['country']" class="!mb-1"/>
    <div>
        <p class="font-semibold">{{ $data['company'] }}</p>
        <p class="max-w-64">{{ $data['address'] }}</p>
    </div>
    <div class="mt-5 mb-7.5">
        <a href="tel:{{ $data['phone'] }}" class="hover-underline inline-block">
            <b class="font-normal">Phone: </b><span>{{ $data['phone'] }}</span>
        </a>
        <a href="mailto:{{ $data['email'] }}" class="hover-underline inline-block">
            <b class="font-normal">Email: </b><span>{{ $data['email'] }}</span>
        </a>
    </div>
</div>
