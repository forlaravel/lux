<div 
    x-ref="trigger" 
    @contextmenu.prevent="onContextMenu" 
    {{ $attributes->mergeTailwind(['class' => 'lux-context-menu-trigger cursor-pointer']) }}>
    {{ $slot }}
</div>