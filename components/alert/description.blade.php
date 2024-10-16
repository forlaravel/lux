@props([
    'tag' => 'div',
])

<{{ $tag }} 
@mergeAttributes 
class="text-sm [&_p]:leading-relaxed"
@endMergeAttributes
>
    {{ $slot }}
</{{ $tag }}>