@blaze
@props(['tag' => 'button', 'checked' => false, 'name' => null, 'size' => 'md'])
<{{ $tag }}
    x-data="{ checked: @wireOr($checked, handlePersist: true) }"
    type="button" role="switch"
    x-on:click="checked = !checked"
    x-modelable="checked"
    :aria-checked="checked?.toString()"
    :data-checked="checked?.toString()"
    {{ $attributes->merge(['class' => "lux-switch lux-switch-size-{$size}"]) }}
>
    @if($name)
        <input type="checkbox" class="opacity-0 absolute pointer-events-none" name="{{ $name }}" x-model="checked" wire:ignore autocomplete="off" tabindex="-1" {{ $attributes->only(['required']) }}>
    @endif
    <span class="lux-switch-thumb" :class="checked && 'lux-switch-thumb-checked'"></span>
</{{ $tag }}>
