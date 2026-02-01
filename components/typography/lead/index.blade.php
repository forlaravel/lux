@blaze
@props([
    'tag' => 'p',
])

<{{ $tag }} {{ $attributes->merge(['class' => 'lux-lead']) }}>
    {{ $slot }}
</{{ $tag }}>
