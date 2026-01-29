@blaze
@props(['tag' => 'div'])
<{{ $tag }}
    x-ref="trigger"
    {{ $attributes->mergeTailwind(['class' => 'lux-hover-card-trigger']) }}
>{{ $slot }}</{{ $tag }}>
