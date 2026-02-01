@blaze
@props([
    'tag' => 'p',
])

<{{ $tag }} {{ $attributes->merge(['class' => 'lux-muted']) }}>
    {{ $slot }}
</{{ $tag }}>
