<div
    {{ $attributes->mergeTailwind(['class' => 'lux-dropdown-menu-sub relative']) }}
    x-data="{ openSub: false }" 
    @keydown.right.prevent="openSub = true; $nextTick(() => $refs['sub-content'].querySelector('button')?.focus());" 
    @keydown.left.prevent="openSub = false; $nextTick(() => $refs['sub-trigger'].focus());"
    @mouseenter="openSub = true" 
    @mouseleave="openSub = false">
    {{ $slot }}
</div>
