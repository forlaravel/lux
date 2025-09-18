@props([
    'tag' => 'div',
])

@tag($tag)
    data-lux="sidebar.header"
@content
    {{ $slot }}
@endTag