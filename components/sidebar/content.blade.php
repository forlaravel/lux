@props([
    'tag' => 'div',
])

@open($tag)
    data-lux="sidebar.content"
@content
    {{ $slot }}
@close