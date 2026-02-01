@blaze
@props(['tag' => 'div'])
<{{ $tag }}
    x-ref="trigger"
    :aria-describedby="show ? $id('hover-card') : null"
    {{ $attributes->mergeTailwind(['class' => 'lux-hover-card-trigger']) }}
>{{ $slot }}</{{ $tag }}>
