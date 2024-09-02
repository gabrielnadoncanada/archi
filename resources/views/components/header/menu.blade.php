@props(['items'])

<ul >
    @foreach($items as $item)
        <x-header.menu-item
            theme="{{!empty($item['children']) ? 'submenu' : 'default'}}"
            :item="$item" />
    @endforeach
</ul>
