@props([
    'open' => true,
])

<div
@mergeAttributes
    data-lux="sidebar.provider"
    data-open="{{ $open ? 'true' : 'false' }}"
    x-data="{
        sidebarOpen: @js($open),
        toggleSidebar() {
            this.sidebarOpen = !this.sidebarOpen;
            this.$el.setAttribute('data-open', this.sidebarOpen ? 'true' : 'false');
        }
    }"
    @toggle-sidebar.window="toggleSidebar()"
@endMergeAttributes
>
    {{ $slot }}
</div>