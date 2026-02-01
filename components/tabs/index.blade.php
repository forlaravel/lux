@blaze
@props([
    'tag' => 'div',
    'value' => null,
    'variant' => 'default',
])

<{{ $tag }}
    {{ $attributes->mergeTailwind(['class' => 'lux-tabs']) }}
    x-data="{
        activeTab: @wireOr($value, handlePersist: true),
        init() {
            if (!this.activeTab) {
                this.activeTab = this.$el.querySelector('[data-tab]').getAttribute('data-tab');
            }
        },
        focusTab(dir) {
            const triggers = [...this.$el.querySelectorAll('[role=tab]')];
            const current = triggers.findIndex(t => t.getAttribute('data-tab') === this.activeTab);
            let next = current + dir;
            if (next < 0) next = triggers.length - 1;
            if (next >= triggers.length) next = 0;
            const nextTab = triggers[next].getAttribute('data-tab');
            this.activeTab = nextTab;
            triggers[next].focus();
        },
    }"
>
    {{ $slot }}
</{{ $tag }}>
