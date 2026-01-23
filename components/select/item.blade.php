{{-- Copyright (c) 2024 forlaravel.com, see LICENSE.md for details. --}}

@props([
    'value',
    'disabled' => false,
    'tag' => 'button',
])

<{{ $tag }}
    class="relative flex w-full cursor-default select-none items-center rounded-sm py-1.5 pl-8 pr-2 text-sm outline-none
        focus:bg-accent focus:text-accent-foreground
        hover:bg-accent hover:text-accent-foreground
        data-[cursor=true]:bg-accent data-[cursor=true]:text-accent-foreground
        data-[disabled=true]:pointer-events-none
        cursor-pointer
        data-[disabled=true]:opacity-50"
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
