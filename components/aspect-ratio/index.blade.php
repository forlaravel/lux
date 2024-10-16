@props(['ratio'])

<div
@mergeAttributes
    style="aspect-ratio: {{ $ratio }};"
    class="relative overflow-hidden"
@endMergeAttributes
>
    {{ $slot }}
</div>
