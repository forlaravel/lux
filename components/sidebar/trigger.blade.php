@props([
    'tag' => 'button',
])

@tag($tag)
    data-lux="sidebar.trigger"
    @click="$dispatch('toggle-sidebar')"
@content
    {{ $slot }}
@endTag