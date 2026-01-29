@blaze
@props([
    'tag' => 'div',
])

<div {{ $attributes->mergeTailwind(['class' => 'lux-dialog-body']) }}>
    {{ $slot }}
</div>
