@props([
    'value' => null,
    'variant' => 'switch',
])

<div
@mergeAttributes
    {{ $attributes->class(['lux-tabs']) }}
    x-data="{
        activeTab: @wireOr($value, handlePersist: true),
        init() {
            if (!this.activeTab) {
                this.activeTab = this.$el.querySelector('[data-tab]').getAttribute('data-tab');
            }
        },
    }"
@endMergeAttributes
>
    {{ $slot }}
</div>
