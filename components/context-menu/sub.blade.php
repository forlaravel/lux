<div 
    x-data="{ openSub: false }" 
    @keydown.right.prevent="openSub = true;"
    @mouseenter="openSub = true"
    @mouseleave="openSub = false"
    {{ $attributes }}>
    {{ $slot }}
</div>