@props([
    'tag' => 'div',
])

@tag($tag)
    data-lux="dialog.header"
@content
    {{ $slot }}
@endTag
