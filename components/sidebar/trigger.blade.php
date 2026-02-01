@blaze
@props([
    'tag' => 'button',
])

<{{ $tag }}
    {{ $attributes->mergeTailwind(['class' => 'lux-sidebar-trigger']) }}
    data-lux="sidebar.trigger"
    @click="$dispatch('toggle-sidebar')"
    :aria-expanded="sidebarOpen?.toString()"
    aria-controls="lux-sidebar"
    aria-label="Toggle sidebar"
>
    {{ $slot }}
</{{ $tag }}>
