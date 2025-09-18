@props([
    'tag' => 'button',
])

@open($tag)
    data-lux="sidebar.trigger"
    @click="$dispatch('toggle-sidebar')"
@content
    {{ $slot }}
@close