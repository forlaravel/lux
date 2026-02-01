@blaze
@props([
    'tag' => 'p',
])

<{{ $tag }} :id="$id('dialog-description')" {{ $attributes->mergeTailwind(['class' => 'lux-dialog-description']) }}>
    {{ $slot }}
</{{ $tag }}>
