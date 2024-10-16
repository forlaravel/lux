@props([
    'name' => '',
    'tag' => 'div',
])
<{{ $tag }}
@mergeAttributes
    x-form:item
    @error($name) error="true" @enderror
    class="space-y-2"
@endMergeAttributes
>
    {{ $slot }}
</{{ $tag }}>
