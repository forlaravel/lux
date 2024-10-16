@props([
    'tag' => 'form',
])
<{{ $tag }}
@mergeAttributes
    x-data
    x-form
    class="space-y-8"
@endMergeAttributes
>
    {{ $slot }}
</{{ $tag }}>
