@props([
    'value' => null,
    'variant' => 'switch',
    'persist' => null,
])

<div 
@mergeAttributes
    x-data="{ 
        activeTab: {!! $attributes->tryWireModelWithFallbackTo($value) !!},
        persist: @js($persist),
        init() {
            if (this.persist) {
                this.activeTab = localStorage.getItem(this.persist) || this.activeTab;
                this.$watch('activeTab', value => localStorage.setItem(this.persist, value));
            }

            if (!this.activeTab) {
                this.activeTab = this.$el.querySelector('[data-tab]').getAttribute('data-tab');
            }
        },
    }" 
@endMergeAttributes
>
    {{ $slot }}
</div>
