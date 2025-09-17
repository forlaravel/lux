@props([
    'tag' => 'button',
])

<{{ $tag }}
@mergeAttributes
    data-lux="dialog.trigger"
    @click.stop="show()"
@endMergeAttributes>
    {{ $slot }}
</{{ $tag }}>
