@props([
    'variant' => 'default',
])

<div {{ $attributes->merge(['class' => "lux-badge lux-badge-variant-{$variant}"]) }}>
    {{ $slot }}
</div>
