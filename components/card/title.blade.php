@blaze
@props(['tag' => 'div'])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-card-title']) }}>
    {{ $slot }}
</{{ $tag }}>