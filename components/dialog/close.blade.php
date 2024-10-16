@props([
    'tag' => 'button',
])

<{{ $tag }} 
@mergeAttributes
    class="group focus-visible:outline-none"
    @click="close()"
@endMergeAttributes>
    {{ $slot }}
</{{ $tag }}>
