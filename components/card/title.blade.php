@blaze
@props(['tag' => 'div'])

<{{ $tag }} {{ $attributes->merge(['class' => 'lux-card-title']) }}>
    {{ $slot }}
</{{ $tag }}>