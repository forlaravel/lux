<div 
    x-data="{ openSub: false }" 
    @keydown.right.prevent="openSub = true;"
    @mouseenter="openSub = true"
    @mouseleave="openSub = false"
    {{ $attributes->mergeTailwind(['class' => 'lux-context-menu-sub']) }}>
    {{ $slot }}
</div>