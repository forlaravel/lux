@blaze
@props([
    'component' => ''    
])

@inject('lux', 'lux')

<x-dynamic-component :component="$lux->componentPath($component)" {{ $attributes }}>
    {{ $slot }}
</x-dynamic-component>