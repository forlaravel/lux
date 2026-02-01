@blaze
@props([
    'tag' => 'p',
])

<{{ $tag }} :id="$id('dialog-description')" {{ $attributes->merge(['class' => 'lux-dialog-description']) }}>
    {{ $slot }}
</{{ $tag }}>
