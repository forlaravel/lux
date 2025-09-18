@props([
    'tag' => 'div',
    'title' => null,
])

@open($tag)
    data-lux="sidebar.group"
@content
    @if($title)
        <div data-lux="sidebar.group-title">{{ $title }}</div>
    @endif
    {{ $slot }}
@close