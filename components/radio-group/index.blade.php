@blaze
@props(['tag' => 'div', 'value' => null, 'name' => null])
<{{ $tag }}
    x-data="{
        selected: @wireOr($value, handlePersist: true),
        focusRadio(dir) {
            const radios = [...this.$el.querySelectorAll('[role=radio]:not(:disabled)')];
            const current = radios.findIndex(r => r === document.activeElement);
            let next = current + dir;
            if (next < 0) next = radios.length - 1;
            if (next >= radios.length) next = 0;
            radios[next].focus();
            radios[next].click();
        },
    }"
    x-modelable="selected"
    role="radiogroup"
    @keydown.arrow-down.prevent="focusRadio(1)"
    @keydown.arrow-right.prevent="focusRadio(1)"
    @keydown.arrow-up.prevent="focusRadio(-1)"
    @keydown.arrow-left.prevent="focusRadio(-1)"
    {{ $attributes->mergeTailwind(['class' => 'lux-radio-group']) }}
>
    {{ $slot }}
    @if($name)
        <input type="hidden" name="{{ $name }}" x-model="selected" wire:ignore>
    @endif
</{{ $tag }}>
