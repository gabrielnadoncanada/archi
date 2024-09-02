@props(['sections' => []])

@foreach ($sections as  $section)
    @if(array_key_exists('hidden', $section['data']))
        @if($section['data']['hidden'])
            @continue
        @endif
    @endif
    @php
        $sectionComponent = Devlense\FilamentBuilder\Facades\FilamentBuilder::getSectionFromName($section['type']);
    @endphp
    @if($sectionComponent)
        <x-dynamic-component
            :component="$sectionComponent::getComponent()"
            :attributes="new \Illuminate\View\ComponentAttributeBag($sectionComponent::mutateData($section['data']))"
        />
    @endif
@endforeach
