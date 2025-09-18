@props([
    'tag' => 'button',
])

@open($tag)
    data-lux="dialog.close"
    @click="close()"
@content
    {{ $slot }}
@close
