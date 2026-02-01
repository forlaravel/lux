@blaze
@props([
    'tag' => 'div',
])

<{{ $tag }} {{ $attributes->merge(['class' => 'lux-sidebar-header']) }}>
    {{ $slot }}
</{{ $tag }}>
