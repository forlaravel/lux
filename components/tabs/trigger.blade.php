@props([
    'tag' => 'button',
    'value'
])
@aware([
    'variant' => 'switch',
])

<{{ $tag }}
    {{ $attributes->mergeTailwind(['class' => "lux-tabs-trigger lux-tabs-trigger-variant-{$variant}"]) }}
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
