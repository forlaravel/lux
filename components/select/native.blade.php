@blaze
@props([
    'tag' => 'select',
])

<{{ $tag }}
    {{ $attributes->mergeTailwind(['class' => 'lux-select-native']) }}
>
{{ $slot }}
</{{ $tag }}>
