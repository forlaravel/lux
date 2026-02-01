
@props(['tag' => 'div'])
<{{ $tag }}
    x-ref="viewport"
    x-on:scroll.throttle.50ms="updateThumb()"
    tabindex="0"
    {{ $attributes->mergeTailwind(['class' => 'lux-scroll-area-viewport']) }}
>{{ $slot }}</{{ $tag }}>
