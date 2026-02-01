@blaze
<div x-show="openSub" x-transition x-cloak
    x-ref="sub-content"
    x-trap="openSub"
    role="menu"
    @keydown.up.prevent="$focus.wrap().previous()"
    @keydown.down.prevent="$focus.wrap().next()"
    {{ $attributes->merge(['class' => 'lux-dropdown-menu-sub-content']) }}>
    {{ $slot }}
</div>
