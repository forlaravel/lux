@blaze
@props([
    'tag' => 'small',
])

<{{ $tag }} {{ $attributes->merge(['class' => 'lux-small']) }}>
    {{ $slot }}
</{{ $tag }}>
