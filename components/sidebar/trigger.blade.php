@blaze
@props([
    'tag' => 'button',
])

<{{ $tag }}
    {{ $attributes->mergeTailwind(['class' => 'lux-sidebar-trigger']) }}
    data-lux="sidebar.trigger"
    @click="$dispatch('toggle-sidebar')"
>
    {{ $slot }}
</{{ $tag }}>
