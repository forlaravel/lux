@props([
    'tag' => 'div',
])

@open($tag)
    data-lux="sidebar.header"
@content
    {{ $slot }}
@close