
@props(['tag' => 'div'])
<{{ $tag }}
    x-ref="viewport"
    x-on:scroll.throttle.50ms="updateThumb()"
    tabindex="0"
    {{ $attributes->merge(['class' => 'lux-scroll-area-viewport']) }}
>{{ $slot }}</{{ $tag }}>
