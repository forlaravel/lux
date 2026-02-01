@blaze
@props(['tag' => 'button', 'variant' => 'default', 'size' => 'md', 'pressed' => false, 'name' => null, 'value' => null])
<{{ $tag }}
    x-data="{ pressed: @wireOr($pressed, handlePersist: true) }"
    type="button"
    x-on:click="pressed = !pressed"
    x-modelable="pressed"
    :aria-pressed="pressed?.toString()"
    :data-pressed="pressed?.toString()"
    {{ $attributes->merge(['class' => "lux-toggle lux-toggle-variant-{$variant} lux-toggle-size-{$size}"]) }}
>
    @if($name)
        <input type="checkbox" class="opacity-0 absolute pointer-events-none" name="{{ $name }}" value="{{ $value ?? 'on' }}" x-model="pressed" wire:ignore autocomplete="off" tabindex="-1" {{ $attributes->only(['required']) }}>
    @endif
    {{ $slot }}
</{{ $tag }}>
