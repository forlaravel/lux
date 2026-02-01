@blaze
@props([
    'tag' => 'div',
])

<{{ $tag }} {{ $attributes->merge(['class' => 'lux-dialog-footer']) }}>
    {{ $slot }}
</{{ $tag }}>
