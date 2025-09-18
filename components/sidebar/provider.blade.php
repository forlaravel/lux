@props([
    'tag' => 'div',
    'open' => true,
    'fixed' => true,
    'side' => 'left',
])

@open($tag)
    data-lux="sidebar.provider"
    x-bind:data-open="sidebarOpen ? 'true' : 'false'"
    x-bind:data-fixed="sidebarFixed ? 'true' : 'false'"
    x-cloak
    x-data="{
        sidebarOpen: @wireOr($open, handlePersist: true),
        sidebarFixed: @js($fixed),
        sidebarSide: @js($side),
        init() {
            if (this.sidebarFixed) {
                // Set initial classes without transition
                document.body.classList.add('sidebar-fixed');
                if (this.sidebarOpen) {
                    document.body.classList.add(`sidebar-open-${this.sidebarSide}`);
                } else {
                    document.body.classList.add(`sidebar-closed-${this.sidebarSide}`);
                }
                // Add transition class after a frame to prevent initial animation
                requestAnimationFrame(() => {
                    document.body.classList.add('sidebar-transition');
                });
            }
            // Mark as initialized after a frame to enable transitions
            requestAnimationFrame(() => {
                this.$el.setAttribute('data-initialized', 'true');
            });
        },
        toggleSidebar() {
            this.sidebarOpen = !this.sidebarOpen;
           
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
@close