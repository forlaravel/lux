@props([
    'tag' => 'div',
])

@open($tag)
    data-lux="sidebar.footer"
@content
    {{ $slot }}
@close