
@props(['tag' => 'div', 'type' => 'single', 'value' => null, 'variant' => 'default', 'size' => 'md', 'name' => null])
<{{ $tag }}
    x-data="{
        value: @wireOr($type === 'multiple' ? ($value ?? []) : $value, handlePersist: true),
        type: @js($type),
        toggle(val) {
            if (this.type === 'multiple') {
                const idx = this.value.indexOf(val);
                idx > -1 ? this.value.splice(idx, 1) : this.value.push(val);
            } else {
                this.value = this.value === val ? null : val;
            }
        },
        isPressed(val) {
            return this.type === 'multiple' ? this.value.includes(val) : this.value === val;
        }
    }"
    x-modelable="value"
    role="group"
    {{ $attributes->merge(['class' => 'lux-toggle-group']) }}
>
    @if($name)
        <input type="hidden" name="{{ $name }}" x-model="value" wire:ignore>
    @endif
    {{ $slot }}
</{{ $tag }}>
