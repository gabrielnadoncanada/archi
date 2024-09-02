@props(['items'])

<div x-data="Components.accordion()">
    @foreach ($items as $index => $item)
        <x-ui.accordion.item :index="$index" :item="$item"/>
    @endforeach
</div>
