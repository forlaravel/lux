@props([
    'tag' => 'h2',
])

@tag($tag)
    data-lux="dialog.title"
@content
    {{ $slot }}
@endTag
