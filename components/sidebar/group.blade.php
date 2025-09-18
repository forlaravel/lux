@props([
    'tag' => 'div',
    'title' => null,
])

@tag($tag)
    data-lux="sidebar.group"
@content
    @if($title)
        <div data-lux="sidebar.group-title">{{ $title }}</div>
    @endif
    {{ $slot }}
@endTag