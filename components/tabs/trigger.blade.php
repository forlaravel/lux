@props([
    'tag' => 'button',
    'value'
])
@aware([
    'variant' => 'default',
])

<{{ $tag }}
    {{ $attributes->mergeTailwind(['class' => "lux-tabs-trigger lux-tabs-trigger-variant-{$variant}"]) }}
    data-tab="{{ $value }}"
    role="tab"
    :aria-selected="activeTab === '{{ $value }}' ? 'true' : 'false'"
    :tabindex="activeTab === '{{ $value }}' ? '0' : '-1'"
    :id="tabsId + '-tab-{{ $value }}'"
    :aria-controls="tabsId + '-tabpanel-{{ $value }}'"
    x-on:click="activeTab = '{{ $value }}'"
    @if($variant === 'switch')
    x-bind:class="{ 'bg-background text-foreground shadow-sm': activeTab === '{{ $value }}', 'text-muted-foreground': activeTab !== '{{ $value }}' }"
    @elseif($variant === 'underline')
    x-bind:class="{ 'text-foreground font-semibold': activeTab === '{{ $value }}', 'text-muted-foreground': activeTab !== '{{ $value }}' }"
    @else
    x-bind:class="{ 'border-b-primary text-foreground': activeTab === '{{ $value }}', 'text-muted-foreground': activeTab !== '{{ $value }}' }"
    @endif
>
    {{ $slot }}
</{{ $tag }}>
