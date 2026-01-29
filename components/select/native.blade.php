@blaze
@props([
    'tag' => 'select',
    'size' => 'md',
])

<{{ $tag }}
    {{ $attributes->mergeTailwind(['class' => "lux-select-native lux-select-native-size-{$size}"]) }}
>
{{ $slot }}
</{{ $tag }}>
