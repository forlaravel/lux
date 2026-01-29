@blaze
<div 
    {{ $attributes->mergeTailwind(['class' => 'lux-dropdown-menu']) }}
    x-data="{ open: false }" 
    @click.outside="open = false" 
    @keydown.escape.window="open = false"
    >
    {{ $slot }}
</div>
