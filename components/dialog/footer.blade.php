@props([
    'tag' => 'div',
])

@open($tag)
    data-lux="dialog.footer"
@content
    {{ $slot }}
@close
