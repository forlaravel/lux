@props([
    'tag' => 'div',
])

@open('div')
    data-lux="dialog.body"
@content
    {{ $slot }}
@close