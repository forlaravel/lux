@props([
    'tag' => 'div',
])

@aware([
    'variant' => 'default',
])

<{{ $tag }}
    {{ $attributes->merge(['class' => "lux-tabs-list lux-tabs-list-variant-{$variant}"]) }}
    role="tablist"
    @keydown.arrow-right.prevent="focusTab(1)"
    @keydown.arrow-left.prevent="focusTab(-1)"
>
    {{ $slot }}
</{{ $tag }}>
