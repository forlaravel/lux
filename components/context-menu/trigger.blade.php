<div 
    x-ref="trigger" 
    @contextmenu.prevent="onContextMenu" 
    {{ $attributes->mergeTailwind(['class' => 'cursor-pointer']) }}>
    {{ $slot }}
</div>