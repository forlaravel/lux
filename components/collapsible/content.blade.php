@blaze
@props(['tag' => 'div'])
<{{ $tag }}
    x-show="open"
    x-collapse
    x-cloak
    :id="$id('collapsible-content')"
    {{ $attributes->mergeTailwind(['class' => 'lux-collapsible-content']) }}
>{{ $slot }}</{{ $tag }}>
