@blaze
@props(['tag' => 'button'])
<{{ $tag }}
    x-ref="trigger"
    @click="open = !open"
    @if($tag === 'button')
    :aria-expanded="open.toString()"
    aria-haspopup="dialog"
    @endif
    {{ $attributes->merge(['class' => 'lux-popover-trigger']) }}
>
    {{ $slot }}
</{{ $tag }}>
