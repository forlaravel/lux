
@props(['tag' => 'div'])
<{{ $tag }}
    x-ref="viewport"
    x-on:scroll.throttle.50ms="updateThumb()"
    {{ $attributes->mergeTailwind(['class' => 'lux-scroll-area-viewport']) }}
>{{ $slot }}</{{ $tag }}>
