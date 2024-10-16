<div x-data="{ 
    search: '',
    resultCount: 1,
    init() {
        this.$watch('search', value => {
            this.resultCount = this.items().length
        });
    },
    items() {
        return Array.from(this.$refs.list.querySelectorAll('.command-item'))
    },
    selected() {
        return this.items().find(item => document.activeElement === item)
    }
}"
    @keydown.up.prevent="$focus.wrap().previous()"
    @keydown.down.prevent="$focus.wrap().next()"
    x-trap="selected()"
    {{ $attributes->merge(['class' => 'flex h-full w-full flex-col overflow-hidden rounded-md bg-popover text-popover-foreground']) }}
    >
    {{ $slot }}
</div>