@blaze
@props([
    'tag' => 'div',
    'value' => null,
    'multiple' => false,
    'animated' => true,
])

<{{ $tag }}
    x-id="['accordion']"
    :id="$id('accordion')"
    x-data="{
        multiple: @js($multiple),
        selected: @wireOr($value, handlePersist: true),
        init() {
            this.selected ??= this.multiple ? [] : null;
        },
        select(id) {
            if (this.multiple) {
                const index = this.selected.indexOf(id);
                index > -1 ? this.selected.splice(index, 1) : this.selected.push(id);
            } else {
                this.selected = this.selected === id ? null : id;
            }
        },
        isSelected(id) {
            return this.multiple ? this.selected.includes(id) : this.selected === id;
        }
    }"
    {{ $attributes->merge(['class' => 'lux-accordion']) }}
>
    {{ $slot }}
</{{ $tag }}>
