@blaze
@props(['tag' => 'div'])
<{{ $tag }}
    x-on:click="open = !open"
    :aria-expanded="open?.toString()"
    {{ $attributes->mergeTailwind(['class' => 'lux-collapsible-trigger']) }}
>{{ $slot }}</{{ $tag }}>
