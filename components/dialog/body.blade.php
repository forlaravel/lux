@props([
    'tag' => 'div',
])

@tag('div')
    data-lux="dialog.body"
@content
    {{ $slot }}
@endTag