@props(['value'])

<div 
@mergeAttributes
    x-cloak
    data-tab="{{ $value }}"
    x-show="activeTab === '{{ $value }}'"
    class="mt-2 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2"
@endMergeAttributes
>
    {{ $slot }}
</div>
