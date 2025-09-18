@props([
    'tag' => 'div',
])

<{{ $tag }}
@mergeAttributes
    data-lux="dialog.body"
@endMergeAttributes>
    {{ $slot }}
</{{ $tag }}>