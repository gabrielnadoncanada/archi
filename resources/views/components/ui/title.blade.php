@props(['titleText'])

<h3 {{ $attributes->merge(['class' => 'text-[30px] 2sm:text-4xl font-bold leading-135 text-primary-foreground mb-7.5']) }}>
    {{ $titleText }}
</h3>
