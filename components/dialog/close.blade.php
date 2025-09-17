@props([
    'tag' => 'button',
])

<{{ $tag }}
@mergeAttributes
    data-lux="dialog.close"
    @click="close()"
@endMergeAttributes>
    {{ $slot }}
</{{ $tag }}>
