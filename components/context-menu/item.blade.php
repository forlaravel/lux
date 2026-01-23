<div 
    role="menuitem" 
    @click="open = false"
    @mouseover="$el.focus()"
    @mouseleave="$el.blur()"
    tabindex="0"
    {{ $attributes->mergeTailwind(['class' => 'lux-context-menu-item relative flex cursor-default select-none items-center rounded-sm px-2 py-1.5 text-sm focus:bg-accent focus:text-accent-foreground outline-none']) }}>
    {{ $slot }}
</div>