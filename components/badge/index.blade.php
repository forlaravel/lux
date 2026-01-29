@blaze
@props([
    'variant' => 'default',
])

<div {{ $attributes->mergeTailwind(['class' => "lux-badge lux-badge-variant-{$variant}"]) }}>
    {{ $slot }}
</div>
