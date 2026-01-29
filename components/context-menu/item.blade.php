@blaze
<div 
    role="menuitem" 
    @click="open = false"
    @mouseover="$el.focus()"
    @mouseleave="$el.blur()"
    tabindex="0"
    {{ $attributes->mergeTailwind(['class' => 'lux-context-menu-item']) }}>
    {{ $slot }}
</div>
