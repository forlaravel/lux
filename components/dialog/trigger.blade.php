@props([
    'tag' => 'button',
])

<{{ $tag }} 
@mergeAttributes
    class="group focus-visible:outline-none"
    @click.stop="show()"
@endMergeAttributes>
    {{ $slot }}
</{{ $tag }}>
