@blaze
@props([
    'tag' => 'ul',
])

<{{ $tag }} {{ $attributes->merge(['class' => 'lux-list']) }}>
    {{ $slot }}
</{{ $tag }}>
