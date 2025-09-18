@props([
    'tag' => 'div',
])

@tag($tag)
    data-lux="sidebar.content"
@content
    {{ $slot }}
@endTag