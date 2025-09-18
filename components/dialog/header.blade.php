@props([
    'tag' => 'div',
])

@open($tag)
    data-lux="dialog.header"
@content
    {{ $slot }}
@close
