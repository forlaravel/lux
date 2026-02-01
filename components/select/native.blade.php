@props([
    'tag' => 'select',
    'size' => 'md',
])

<{{ $tag }}
    {{ $attributes->merge(['class' => "lux-select-native lux-select-native-size-{$size}"]) }}
>
{{ $slot }}
</{{ $tag }}>
