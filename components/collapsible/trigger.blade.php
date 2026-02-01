@blaze
@props(['tag' => 'button'])
<{{ $tag }}
    x-on:click="open = !open"
    @if($tag === 'button')
    :aria-expanded="open?.toString()"
    :aria-controls="$id('collapsible-content')"
    @endif
    {{ $attributes->merge(['class' => 'lux-collapsible-trigger']) }}
>{{ $slot }}</{{ $tag }}>
