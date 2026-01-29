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
    }"
>
    {{ $slot }}
</{{ $tag }}>
