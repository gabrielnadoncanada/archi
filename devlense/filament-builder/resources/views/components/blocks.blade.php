@props(['blocks' => []])

@foreach ($blocks as $block)
    @php
        $blockComponent = Devlense\FilamentBuilder\Facades\FilamentBuilder::getBlockFromName($block['type']);
    @endphp

    @isset($blockComponent)
        <x-dynamic-component
            :component="$blockComponent::getComponent()"
            :attributes="new \Illuminate\View\ComponentAttributeBag($blockComponent::mutateData($block['data']))"
        />
    @endisset
@endforeach
