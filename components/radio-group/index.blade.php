@blaze
@props(['tag' => 'div', 'value' => null, 'name' => null])
<{{ $tag }}
    x-data="{ selected: @wireOr($value, handlePersist: true) }"
    x-modelable="selected"
    role="radiogroup"
    {{ $attributes->mergeTailwind(['class' => 'lux-radio-group']) }}
>
    {{ $slot }}
    @if($name)
        <input type="hidden" name="{{ $name }}" x-model="selected" wire:ignore>
    @endif
</{{ $tag }}>
