@props([
    'tag' => 'div'
])

<{{ $tag }}
    x-id="['accordion-item', 'accordion-trigger', 'accordion-content']"
    :id="$id('accordion-item')"
    :aria-labelledby="$id('accordion-trigger')"
    role="region"
    {{ $attributes->mergeTailwind(['class' => 'lux-accordion-item']) }}
>
    {{ $slot }}
</{{ $tag }}>
