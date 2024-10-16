<div 
    x-ref="trigger" 
    @contextmenu.prevent="onContextMenu" 
    {{ $attributes->merge(['class' => 'cursor-pointer']) }}>
    {{ $slot }}
</div>