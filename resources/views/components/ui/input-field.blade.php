@props(['placeholder', 'type', 'className'])

<input {{ $attributes->merge([
    'type' => $type,
    'placeholder' => $placeholder,
    'name' => $type,
    'required' => true,
    'class' => "px-[15px] py-[14px] outline-none border-[2px] border-primary w-full bg-transparent"
    ])}}/>
