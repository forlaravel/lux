@blaze
@props([
    'tag' => 'p',
])

<{{ $tag }} {{ $attributes->merge(['class' => 'lux-p']) }}>
    {{ $slot }}
</{{ $tag }}>
