@props(['tag' => 'div', 'value' => null, 'name' => null, 'placeholder' => 'Select an option', 'searchPlaceholder' => 'Search...'])
<{{ $tag }}
    x-data="{
        open: false,
        search: '',
        selected: @wireOr($value, handlePersist: true),
        selectedLabel: '',
        items: [],
        get filtered() {
            if (!this.search) return this.items;
            const query = this.search.toLowerCase();
            return this.items.filter(item => item.label.toLowerCase().includes(query));
        },
        register(value, label) {
            this.items.push({ value, label });
            if (this.selected === value) this.selectedLabel = label;
        },
        select(value, label) {
            this.selected = this.selected === value ? null : value;
            this.selectedLabel = this.selected ? label : '';
            this.open = false;
            this.search = '';
        },
        isSelected(value) {
            return this.selected === value;
        }
    }"
    x-modelable="selected"
    {{ $attributes->merge(['class' => 'lux-combobox']) }}
>
    {{ $slot }}
    @if($name)
        <input type="hidden" name="{{ $name }}" x-model="selected" wire:ignore>
    @endif
</{{ $tag }}>
