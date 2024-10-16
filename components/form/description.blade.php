@props([
    'tag' => 'p',
])
<{{ $tag }} 
@mergeAttributes
x-form:description 
class="text-[0.8rem] text-muted-foreground"
@endMergeAttributes
>
    {{ $slot }}
</{{ $tag }} >
