@props([
    'tag' => 'div',
])

<{{ $tag }} @mergeAttributes class="flex flex-col space-y-1.5 text-center sm:text-left mb-4" @endMergeAttributes>
    {{ $slot }}
</{{ $tag }}>
