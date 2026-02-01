@blaze
@props([
    'tag' => 'div',
    'value' => null,
])

<{{ $tag }}
    {{ $attributes->mergeTailwind(['class' => 'lux-tab-bar-wrapper']) }}
    x-data="{
        activeTab: @wireOr($value, handlePersist: true),
        init() {
            if (!this.activeTab) {
                const first = this.$el.querySelector('[data-tab]');
                if (first) this.activeTab = first.getAttribute('data-tab');
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
