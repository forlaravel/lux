@blaze
<div 
    x-ref="trigger" 
    @contextmenu.prevent="onContextMenu" 
    {{ $attributes->merge(['class' => 'lux-context-menu-trigger']) }}>
    {{ $slot }}
</div>
