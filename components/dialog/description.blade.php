@props([
    'tag' => 'p',
])

<{{ $tag }} @mergeAttributes class="text-sm text-muted-foreground" @endMergeAttributes>
    {{ $slot }}
</{{ $tag }}>