@props([
    'tag' => 'button',
    'value'
])
@aware([
    'variant' => 'switch',
])

@php
$baseClasses = 'cursor-pointer inline-flex items-center justify-center whitespace-nowrap font-medium ring-offset-background transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50';

$variantClasses = match ($variant) {
    'switch' => 'rounded-sm px-3 py-1.5 text-sm',
    'underline' => 'relative h-9 rounded-none border-2 border-transparent bg-transparent px-4 pb-3 pt-3.5 text-sm font-semibold shadow-none transition-none focus-visible:border-t-primary focus-visible:border-x-primary focus-visible:rounded-t-md',
    'simple' => 'text-sm',
    default => '',
};

@endphp

<{{ $tag }}
    {{ $attributes->mergeTailwind(['class' => $baseClasses . ' ' . $variantClasses]) }}
    data-tab="{{ $value }}"
    x-on:click="activeTab = '{{ $value }}'"
    @if($variant === 'switch')
    x-bind:class="{ 'bg-background text-foreground shadow-sm': activeTab === '{{ $value }}', 'text-muted-foreground': activeTab !== '{{ $value }}' }"
    @elseif($variant === 'underline')
    x-bind:class="{ 'border-b-primary text-foreground': activeTab === '{{ $value }}', 'text-muted-foreground': activeTab !== '{{ $value }}' }"
    @else
    x-bind:class="{ 'text-foreground': activeTab === '{{ $value }}', 'text-muted-foreground': activeTab !== '{{ $value }}' }"
    @endif
>
    {{ $slot }}
</{{ $tag }}>
