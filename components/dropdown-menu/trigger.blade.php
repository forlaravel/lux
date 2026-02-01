@blaze
<button
    type="button"
    x-ref="trigger"
    @click="open = !open"
    aria-haspopup="menu"
    :aria-expanded="open.toString()"
    {{ $attributes->mergeTailwind(['class' => 'lux-dropdown-menu-trigger']) }}
>
    {{ $slot }}
</button>
