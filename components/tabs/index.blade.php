@props([
    'tag' => 'div',
    'value' => null,
    'variant' => 'switch',
])

@tag($tag)
    data-lux="tabs"
    data-variant="{{ $variant }}"
    x-data="{
        activeTab: @wireOr($value, handlePersist: true),
        init() {
            if (!this.activeTab) {
                this.activeTab = this.$el.querySelector('[data-tab]').getAttribute('data-tab');
            }
        },
    }"
@content
    {{ $slot }}
@endTag
