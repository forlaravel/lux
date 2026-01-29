@blaze
@props(['tag' => 'button', 'checked' => false, 'name' => null, 'size' => 'md'])
<{{ $tag }}
    x-data="{ checked: @wireOr($checked, handlePersist: true) }"
    type="button" role="switch"
    x-on:click="checked = !checked"
    x-modelable="checked"
    :aria-checked="checked?.toString()"
    :data-checked="checked?.toString()"
    {{ $attributes->mergeTailwind(['class' => "lux-switch lux-switch-size-{$size}"]) }}
>
    @if($name)
        <input type="checkbox" class="opacity-0 absolute" name="{{ $name }}" x-model="checked" wire:ignore tabindex="-1">
    @endif
    <span class="lux-switch-thumb" :class="checked && 'lux-switch-thumb-checked'"></span>
</{{ $tag }}>
