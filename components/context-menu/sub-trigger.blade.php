@blaze
<button 
    @click="openSub = !openSub"
    @mouseover="$el.focus()"
    @mouseleave="$el.blur()"
    {{ $attributes->mergeTailwind(['class' => 'lux-context-menu-sub-trigger flex w-full items-center px-2 py-1.5 text-sm focus:bg-accent focus:text-accent-foreground outline-none']) }}>
    {{ $slot }}
    <svg class="ml-auto w-4 h-4" fill="none" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
    </svg>
</button>