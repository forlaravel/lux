@blaze
@props([
    'tag' => 'div',
])

<div {{ $attributes->merge(['class' => 'lux-dialog-body']) }}>
    {{ $slot }}
</div>
