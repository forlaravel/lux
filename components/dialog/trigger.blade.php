@props([
    'tag' => 'button',
])

@open($tag)
    data-lux="dialog.trigger"
    @click.stop="show()"
@content
    {{ $slot }}
@close
