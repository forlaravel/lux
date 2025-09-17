@props([
    'tag' => 'div',
])

<{{ $tag }}
@mergeAttributes
    data-lux="dialog.footer"
@endMergeAttributes>
    {{ $slot }}
</{{ $tag }}>
