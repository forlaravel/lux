@props([
    'tag' => 'h2',
])

@open($tag)
    data-lux="dialog.title"
@content
    {{ $slot }}
@close
