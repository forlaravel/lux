@props([
    'tag' => 'div',
])

<{{ $tag }}
@mergeAttributes
    data-lux="dialog.header"
@endMergeAttributes>
    {{ $slot }}
</{{ $tag }}>
