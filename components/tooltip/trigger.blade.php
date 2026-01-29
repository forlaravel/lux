@blaze
@props(['tag' => 'div'])
<{{ $tag }}
    x-ref="trigger"
    {{ $attributes->mergeTailwind(['class' => 'lux-tooltip-trigger']) }}
>{{ $slot }}</{{ $tag }}>
