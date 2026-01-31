@props([
    'tag' => 'button',
    'value',
    'label' => null,
])

<{{ $tag }}
    {{ $attributes->mergeTailwind(['class' => 'lux-tab-bar-item']) }}
    data-tab="{{ $value }}"
    x-on:click="activeTab = '{{ $value }}'"
    x-bind:class="{
        'lux-tab-bar-item-active': activeTab === '{{ $value }}',
        'lux-tab-bar-item-inactive': activeTab !== '{{ $value }}',
    }"
>
    @if(isset($icon))
        <span class="lux-tab-bar-item-icon">{{ $icon }}</span>
    @endif
    @if($label)
        <span class="lux-tab-bar-item-label">{{ $label }}</span>
    @endif
</{{ $tag }}>
