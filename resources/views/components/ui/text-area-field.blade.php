@props(['placeholder' => '', 'required' => true])

<textarea {{ $attributes->merge([
        'class' => 'px-[15px] py-[14px] outline-none border-[2px] border-primary w-full bg-transparent',
        'placeholder' => $placeholder,
        'required' => $required,
    ])}}>
</textarea>
