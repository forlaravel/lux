@props(['value'])
@aware([
    'variant' => 'switch',
])

<button
@mergeAttributes
    {{ $attributes->class([
        'inline-flex items-center justify-center whitespace-nowrap rounded-sm px-3 py-1.5 text-sm font-medium ring-offset-background transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50' => $variant === 'switch',
        'inline-flex items-center justify-center whitespace-nowrap py-1 text-sm ring-offset-background relative h-9 rounded-none border-2 border-transparent bg-transparent px-4 pb-3 pt-3.5 font-semibold text-muted-foreground shadow-none transition-none
            focus-visible:outline-none focus-visible:border-t-primary focus-visible:border-x-primary focus-visible:rounded-t-md
            disabled:pointer-events-none disabled:opacity-50' => $variant === 'underline',
    ]) }}
    @click="activeTab = '{{ $value }}'"
    @if($variant === 'switch')
        x-bind:class="{ 'bg-background text-foreground shadow-sm': activeTab === '{{ $value }}', 'text-muted-foreground': activeTab !== '{{ $value }}' }"
    @elseif($variant === 'underline')
        x-bind:class="{ 'border-b-primary text-foreground': activeTab === '{{ $value }}' }"
    @endif
@endMergeAttributes
>
    {{ $slot }}
</button>
