@blaze
@props(['tag' => 'button'])
<{{ $tag }}
    @if($tag === 'button') type="button" @endif
    x-ref="trigger"
    @click="open = !open"
    aria-haspopup="menu"
    :aria-expanded="open.toString()"
    {{ $attributes->mergeTailwind(['class' => 'lux-dropdown-menu-trigger']) }}
>
    {{ $slot }}
</{{ $tag }}>
