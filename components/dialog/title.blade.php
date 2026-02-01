@blaze
@props([
    'tag' => 'h2',
])

<{{ $tag }} :id="$id('dialog-title')" {{ $attributes->merge(['class' => 'lux-dialog-title']) }}>
    {{ $slot }}
</{{ $tag }}>
