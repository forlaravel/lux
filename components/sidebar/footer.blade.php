@props([
    'tag' => 'div',
])

@tag($tag)
    data-lux="sidebar.footer"
@content
    {{ $slot }}
@endTag