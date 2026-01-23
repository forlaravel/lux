@props([
    'tag' => 'button',
])

<{{ $tag }}
    {{ $attributes }}
    data-lux="sidebar.trigger"
    @click="$dispatch('toggle-sidebar')"
>
    {{ $slot }}
</{{ $tag }}>
