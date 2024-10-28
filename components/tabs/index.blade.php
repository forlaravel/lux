@props([
    'value' => null,
    'variant' => 'switch',
])

<div 
@mergeAttributes
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
