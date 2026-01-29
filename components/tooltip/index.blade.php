@blaze
@props(['tag' => 'div', 'placement' => 'top'])
<{{ $tag }}
    x-data="{ show: false, placement: @js($placement) }"
    x-on:mouseenter="show = true"
    x-on:mouseleave="show = false"
    x-on:focus.capture="show = true"
    x-on:blur.capture="show = false"
    {{ $attributes->mergeTailwind(['class' => 'lux-tooltip']) }}
>{{ $slot }}</{{ $tag }}>
