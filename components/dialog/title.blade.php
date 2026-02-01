@blaze
@props([
    'tag' => 'h2',
])

<{{ $tag }} :id="$id('dialog-title')" {{ $attributes->mergeTailwind(['class' => 'lux-dialog-title']) }}>
    {{ $slot }}
</{{ $tag }}>
