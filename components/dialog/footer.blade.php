@props([
    'tag' => 'div',
])

<{{ $tag }} @mergeAttributes class="flex flex-col-reverse sm:flex-row sm:justify-end sm:space-x-2 mt-6" @endMergeAttributes>
    {{ $slot }}
</{{ $tag }}>
