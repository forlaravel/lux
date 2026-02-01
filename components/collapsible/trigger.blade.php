@blaze
@props(['tag' => 'button'])
<{{ $tag }}
    x-on:click="open = !open"
    :aria-expanded="open?.toString()"
    :aria-controls="$id('collapsible-content')"
    {{ $attributes->mergeTailwind(['class' => 'lux-collapsible-trigger']) }}
>{{ $slot }}</{{ $tag }}>
