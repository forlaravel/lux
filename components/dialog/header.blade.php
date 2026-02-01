@blaze
@props([
    'tag' => 'div',
])

<{{ $tag }} {{ $attributes->merge(['class' => 'lux-dialog-header']) }}>
    {{ $slot }}
</{{ $tag }}>
