@props([
    'tag' => 'button',
])

@tag($tag)
    data-lux="dialog.trigger"
    @click.stop="show()"
@content
    {{ $slot }}
@endTag
