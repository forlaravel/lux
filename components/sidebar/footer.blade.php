@blaze
@props([
    'tag' => 'div',
])

<{{ $tag }} {{ $attributes->merge(['class' => 'lux-sidebar-footer']) }}>
    {{ $slot }}
</{{ $tag }}>
