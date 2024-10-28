@props([
    "for" => null,
])

<label
@mergeAttributes
    x-data
    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
    @if($for) for="{{ $for }}" @endif
    :class="{ 'cursor-pointer': $el.hasAttribute('for') }"
@endMergeAttributes
>
    {{ $slot }}
</label>
