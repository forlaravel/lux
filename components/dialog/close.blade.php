@props([
    'tag' => 'button',
])

@tag($tag)
    data-lux="dialog.close"
    @click="close()"
@content
    {{ $slot }}
@endTag
