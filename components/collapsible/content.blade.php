@blaze
@props(['tag' => 'div'])
<{{ $tag }}
    x-show="open"
    x-collapse
    x-cloak
    {{ $attributes->mergeTailwind(['class' => 'lux-collapsible-content']) }}
>{{ $slot }}</{{ $tag }}>
