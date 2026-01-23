@props([
    'tag' => 'div',
    'open' => true,
    'fixed' => true,
    'side' => 'left',
])

<{{ $tag }}
    {{ $attributes->mergeTailwind(['class' => 'relative flex min-h-screen w-full overflow-hidden']) }}
    x-cloak
    x-data="{
        sidebarOpen: @wireOr($open, handlePersist: true),
        sidebarFixed: @js($fixed),
        sidebarSide: @js($side),
        init() {
            this.updateBodyClasses();

            requestAnimationFrame(() => {
                this.$el.setAttribute('data-initialized', 'true');
            });

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
            const sidebar = this.$el.querySelector('[data-lux=\'sidebar\']');
            const trigger = event.target.closest('[data-lux=\'sidebar.trigger\']');

            if (!trigger && sidebar && !sidebar.contains(event.target) && window.innerWidth < 768) {
                this.closeSidebar();
            }
        },
        updateBodyClasses() {
            if (this.sidebarFixed) {
                document.body.classList.add('transition-all', 'duration-300', 'ease-in-out');
                if (this.sidebarOpen) {
                    if (this.sidebarSide === 'left') {
                        document.body.classList.add('md:ml-64');
                        document.body.classList.remove('md:mr-64');
                    } else {
                        document.body.classList.add('md:mr-64');
                        document.body.classList.remove('md:ml-64');
                    }
                } else {
                    document.body.classList.remove('md:ml-64', 'md:mr-64');
                }
            }
        }
    }"
    x-bind:data-open="sidebarOpen ? 'true' : 'false'"
    x-bind:data-fixed="sidebarFixed ? 'true' : 'false'"
    @toggle-sidebar.window="toggleSidebar()"
>
    {{-- Mobile backdrop for fixed mode --}}
    <div
        x-show="sidebarFixed && sidebarOpen"
        x-transition:enter="transition-opacity duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition-opacity duration-300"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-30 bg-black/50 md:hidden"
        @click="closeSidebar()"
    ></div>

    {{ $slot }}
</{{ $tag }}>
