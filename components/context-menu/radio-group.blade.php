@blaze
@props(['name', 'value' => null])

<div x-data="{ selectedValue: '{{ $value }}' }"
    @radio-select.stop="selectedValue = $event.detail.value"
    {{ $attributes->mergeTailwind(['class' => 'lux-context-menu-radio-group']) }}>
    {{ $slot }}
</div>
