@props([
    'tag' => 'div',
    'open' => true,
    'fixed' => true,
    'side' => 'left',
])

@tag($tag)
    data-lux="sidebar.provider"
    data-open="{{ $open ? 'true' : 'false' }}"
    data-fixed="{{ $fixed ? 'true' : 'false' }}"
    x-data="{
        sidebarOpen: @js($open),
        sidebarFixed: @js($fixed),
        sidebarSide: @js($side),
        init() {
            if (this.sidebarFixed) {
                this.updateBodyClasses();
            }
        },
        toggleSidebar() {
            this.sidebarOpen = !this.sidebarOpen;
            this.$el.setAttribute('data-open', this.sidebarOpen ? 'true' : 'false');
            if (this.sidebarFixed) {
                this.updateBodyClasses();
            }
        },
        updateBodyClasses() {
            document.body.classList.add('sidebar-fixed', 'sidebar-transition');

            if (this.sidebarOpen) {
                document.body.classList.add(`sidebar-open-${this.sidebarSide}`);
                document.body.classList.remove(`sidebar-closed-${this.sidebarSide}`);
            } else {
                document.body.classList.add(`sidebar-closed-${this.sidebarSide}`);
                document.body.classList.remove(`sidebar-open-${this.sidebarSide}`);
            }
        }
    }"
    @toggle-sidebar.window="toggleSidebar()"
@content
    {{ $slot }}
@endTag