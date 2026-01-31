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
    }"
>
    {{ $slot }}
</{{ $tag }}>
