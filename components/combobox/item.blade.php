
@props(['tag' => 'button', 'value', 'label' => null, 'disabled' => false])
@php $itemLabel = $label ?? $slot->toHtml(); @endphp
<{{ $tag }}
    type="button"
    role="option"
    :aria-selected="isSelected(@js($value)).toString()"
    x-init="register(@js($value), @js($itemLabel))"
    x-show="!search || @js($itemLabel).toLowerCase().includes(search.toLowerCase())"
    x-on:click="select(@js($value), @js($itemLabel))"
    :data-highlighted="isSelected(@js($value)) || undefined"
    :data-disabled="@js($disabled) || undefined"
    @disabled($disabled)
    {{ $attributes->merge(['class' => 'lux-combobox-item']) }}
>
    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" aria-hidden="true" :class="isSelected(@js($value)) ? 'opacity-100' : 'opacity-0'" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
    {{ $slot }}
</{{ $tag }}>
