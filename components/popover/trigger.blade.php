@blaze
@props(['tag' => 'button'])
<{{ $tag }}
    x-ref="trigger"
    @click="open = !open"
    :aria-expanded="open.toString()"
    aria-haspopup="dialog"
    {{ $attributes->mergeTailwind(['class' => 'lux-popover-trigger']) }}
>
    {{ $slot }}
</{{ $tag }}>
