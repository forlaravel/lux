@props([
    'teleport',
    'open' => false,
])

<div x-data="{ open: @wireOr($open) }" @keydown.escape.window="open = false" {{ $attributes }}>
    {{ $slot }}
</div>