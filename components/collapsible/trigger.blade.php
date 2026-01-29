@blaze
@props(['tag' => 'button'])
<{{ $tag }}
    type="button"
    x-on:click="open = !open"
    :aria-expanded="open?.toString()"
    {{ $attributes->mergeTailwind(['class' => 'lux-collapsible-trigger']) }}
>{{ $slot }}</{{ $tag }}>
