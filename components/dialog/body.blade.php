@props([
    'tag' => 'p',
])

<{{ $tag }}
@mergeAttributes
    data-lux="dialog.body"
@endMergeAttributes>
    {{ $slot }}
</{{ $tag }}>