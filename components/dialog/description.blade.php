@props([
    'tag' => 'p',
])

<{{ $tag }}
@mergeAttributes
    data-lux="dialog.description"
@endMergeAttributes>
    {{ $slot }}
</{{ $tag }}>