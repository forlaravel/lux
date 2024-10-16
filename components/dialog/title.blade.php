@props([
    'tag' => 'h2',
])

<{{ $tag }} @mergeAttributes class="text-lg font-semibold leading-none tracking-tight" @endMergeAttributes>
    {{ $slot }}
</{{ $tag }}>
