@props([
    'tag' => 'div',
    'open' => true,
    'fixed' => true,
    'side' => 'left',
])

@open($tag)
    data-lux="sidebar.provider"
    x-cloak
    x-data="{
        sidebarOpen: @wireOr($open, handlePersist: true),
        sidebarFixed: @js($fixed),
        sidebarSide: @js($side),
        init() {
            this.updateBodyClasses();

            // Mark as initialized after a frame to enable transitions
            requestAnimationFrame(() => {
                this.$el.setAttribute('data-initialized', 'true');
            });
            
            // Add click event listener for backdrop
            this.$el.addEventListener('click', (event) => this.handleBackdropClick(event));
        },
        toggleSidebar() {
            this.sidebarOpen = !this.sidebarOpen;
           
            if (this.sidebarFixed) {
                this.updateBodyClasses();
            }
        },
        closeSidebar() {
            this.sidebarOpen = false;
            
            if (this.sidebarFixed) {
                this.updateBodyClasses();
            }
        },
        handleBackdropClick(event) {
            // Check if click is on the backdrop (::before pseudo element area)
            const sidebar = this.$el.querySelector('[data-lux=\'sidebar\']');
            const trigger = event.target.closest('[data-lux=\'sidebar.trigger\']');
            
            // Don't close if clicking on trigger button or inside sidebar
            if (!trigger && sidebar && !sidebar.contains(event.target) && window.innerWidth < 768) {
                this.closeSidebar();
            }
        },
        updateBodyClasses() {
            if (this.sidebarFixed) {
                // Set initial classes without transition
                if (this.sidebarOpen) {
                    document.body.classList.add(`sidebar-open-${this.sidebarSide}`);
                } else {
                    document.body.classList.remove(`sidebar-open-${this.sidebarSide}`);
                }

                // Add transition class after a frame to prevent initial animation
                requestAnimationFrame(() => {
                    document.body.classList.add('sidebar-transition');
                });
            }
        }
    }"
    x-bind:data-open="sidebarOpen ? 'true' : 'false'"
    x-bind:data-fixed="sidebarFixed ? 'true' : 'false'"
    @toggle-sidebar.window="toggleSidebar()"
@content
    {{ $slot }}
@close