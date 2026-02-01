@props([
    'tag' => 'button',
    'value',
    'label' => null,
])

<{{ $tag }}
    {{ $attributes->merge(['class' => 'lux-tab-bar-item']) }}
    data-tab="{{ $value }}"
    role="tab"
    :aria-selected="(activeTab === '{{ $value }}').toString()"
    :tabindex="activeTab === '{{ $value }}' ? '0' : '-1'"
    :id="$id('tab-{{ $value }}')"
    :aria-controls="$id('tabpanel-{{ $value }}')"
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
