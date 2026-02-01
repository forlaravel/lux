@blaze
<div x-data="{
    search: '',
    resultCount: 1,
    init() {
        this.$watch('search', value => {
            this.$nextTick(() => {
                this.resultCount = this.items().filter(item => item.offsetParent !== null).length;
            });
        });
    },
    items() {
        return Array.from(this.$refs.list.querySelectorAll('.command-item'))
    },
    activateSelected() {
        const focused = this.items().find(item => document.activeElement === item);
        if (focused) focused.click();
    }
}"
    @keydown.up.prevent="$focus.wrap().previous()"
    @keydown.down.prevent="$focus.wrap().next()"
    @keydown.enter.prevent="activateSelected()"
    {{ $attributes->merge(['class' => 'lux-command']) }}
    >
    {{ $slot }}
</div>
