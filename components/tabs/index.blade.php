@props([
    'tag' => 'div',
    'value' => null,
    'variant' => 'switch',
])

<{{ $tag }}
    {{ $attributes->mergeTailwind(['class' => 'relative']) }}
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
