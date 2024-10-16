@props([

])

<label
@mergeAttributes
    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
@endMergeAttributes
>
    {{ $slot }}
</label>
