<div x-data="{ open: false }" @keydown.escape.window="open = false" {{ $attributes }}>
    {{ $slot }}
</div>