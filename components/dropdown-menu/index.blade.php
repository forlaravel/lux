<div 
    {{ $attributes }}
    x-data="{ open: false }" 
    @click.outside="open = false" 
    @keydown.escape.window="open = false"
    >
    {{ $slot }}
</div>