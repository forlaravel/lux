@props([
    'tag' => 'h2',
])

<{{ $tag }}
@mergeAttributes
    data-lux="dialog.title"
@endMergeAttributes>
    {{ $slot }}
</{{ $tag }}>
