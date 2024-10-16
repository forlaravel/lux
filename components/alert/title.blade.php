@props([
    'tag' => 'h5',
])

<{{$tag}} 
@mergeAttributes 
class="mb-1 font-medium leading-none tracking-tight"
@endMergeAttributes>
    {{ $slot }}
</{{$tag}}>