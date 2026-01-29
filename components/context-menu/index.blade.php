@blaze
<div 
    x-data="{ 
        open: false,
        anchor: { x: 0, y: 0 },
        onContextMenu(event) {
            event.preventDefault();
            this.anchor = { x: event.clientX, y: event.clientY };
            this.open = true;
        }
    }" 
    @keydown.escape.window="open = false" 
    {{ $attributes->mergeTailwind(['class' => 'lux-context-menu']) }}>
    {{ $slot }}
</div>
