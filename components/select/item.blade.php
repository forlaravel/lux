{{-- Copyright (c) 2024 forlaravel.com, see LICENSE.md for details. --}}

@props([
    'value',
    'disabled' => false,
    'tag' => 'button',
])

<{{ $tag }}
    class="lux-select-item"
    @click.prevent.stop="select(@js($value))"
    type="button"
    @mouseover="cursor = @js($value)"
    aria-disabled="{{ $disabled ? 'true' : 'false' }}"
    data-disabled="{{ $disabled ? 'true' : 'false' }}"
    role="option"
    :aria-selected="isSelected(@js($value))"
    :data-cursor="cursor === @js($value)"
    :data-value="@js($value)"
    {{ $attributes }}
>
    <svg xmlns="http://www.w3.org/2000/svg" x-show="isSelected(@js($value))" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute left-2 h-4 w-4"><path d="M20 6 9 17l-5-5"></path></svg>
    {{ $slot }}
</{{ $tag }}>
