@blaze
@props([
    'tag' => 'div'
])

<{{ $tag }}
    x-id="['accordion-item', 'accordion-trigger', 'accordion-content']"
    :id="$id('accordion-item')"
    {{ $attributes->merge(['class' => 'lux-accordion-item']) }}
>
    {{ $slot }}
</{{ $tag }}>
