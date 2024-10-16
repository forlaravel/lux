@props([
    'items' => [],
    'placeholder' => 'Select an option...',
    'noResultsText' => 'No results found.',
])

<div x-data="{
    open: false,
    query: '',
    selected: null,
    items: @js($items),
    init() {
        this.$watch('open', (value) => {
            if (value) {
                this.$nextTick(() => {
                    this.$refs.input.focus();
                });
            }
        });
    },
    get filteredItems() {
        if (this.query === '') {
            return this.items;
        }
        return this.items.filter(item => item.label.toLowerCase().includes(this.query.toLowerCase()));
    },
    selectItem(item) {
        this.selected = item;
        this.open = false;
        this.query = '';
    }
}" @click.away="open = false" {{ $attributes->merge(['class' => "relative"]) }}>
    <x-combobox.trigger :placeholder="$placeholder" @click="open = !open" />

    <x-combobox.content x-show="open" x-cloak>
        <input autofocus type="text" x-ref="input" x-model="query" placeholder="Search..." class="w-full p-2 border-b" />

        <ul class="max-h-60 overflow-y-auto">
            <template x-if="filteredItems.length === 0">
                <li class="p-2 text-sm text-muted-foreground">{{ $noResultsText }}</li>
            </template>

            <template x-for="item in filteredItems" :key="item.value">
                <x-combobox.item x-bind:item="item" x-on:click="selectItem(item)">
                    <template x-slot:icon>
                        <svg x-show="selected?.value === item.value" class="w-4 h-4 text-primary">
                            <path d="M5 13l4 4L19 7"></path>
                        </svg>
                    </template>
                </x-combobox.item>
            </template>
        </ul>
    </x-combobox.content>
</div>