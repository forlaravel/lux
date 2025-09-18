@props([
    'tag' => 'div',
])

@tag($tag)
    data-lux="dialog.footer"
@content
    {{ $slot }}
@endTag
