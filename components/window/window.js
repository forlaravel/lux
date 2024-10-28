export default function (Alpine) {
    Alpine.directive("window", (el, directive, { evaluate }) => {
        let extraConfig = directive.expression ? evaluate(directive.expression) : {};
        if (!directive.value) handleRoot(el, Alpine, extraConfig);
        else if (directive.value === 'window') handleWindow(el, Alpine, extraConfig);
    }).before("bind");
}

function handleRoot(el, Alpine, extraConfig) {
    Alpine.bind(el, () => {
        return {
            "x-data"() {
                return {
                    isDragging: false,
                    isResizing: false,
                    posX: 0,
                    posY: 0,
                    width: 300,
                    height: 200,
                    startX: 0,
                    startY: 0,
                    startWidth: 0,
                    startHeight: 0,
                    startLeft: 0,
                    startTop: 0,
                    resizeDirection: null,
                    // Bound methods
                    boundDrag: null,
                    boundStopDrag: null,
                    boundResize: null,
                    boundStopResize: null,
                    show: true,
                    init() {
                        const savedState = JSON.parse(localStorage.getItem(this.persist?.value ?? 'persist_panel_state'));
                        if (savedState) {
                            this.width = savedState.width;
                            this.height = savedState.height;
                            this.$el.style.left = savedState.left + 'px';
                            this.$el.style.top = savedState.top + 'px';
                            this.$el.style.width = this.width + 'px';
                            this.$el.style.height = this.height + 'px';
                        }
        
                        // Bind methods
                        this.boundDrag = this.drag.bind(this);
                        this.boundStopDrag = this.stopDrag.bind(this);
                        this.boundResize = this.resize.bind(this);
                        this.boundStopResize = this.stopResize.bind(this);
        
                        this.$el.addEventListener('mousedown', (e) => {
                            if (e.target.classList.contains('resize-handle')) {
                                // Start resizing
                                this.isResizing = true;
                                this.resizeDirection = e.target.classList.contains('top-left') ? 'top-left' :
                                                       e.target.classList.contains('top-right') ? 'top-right' :
                                                       e.target.classList.contains('bottom-left') ? 'bottom-left' :
                                                       'bottom-right';
                                this.startX = e.clientX;
                                this.startY = e.clientY;
                                this.startWidth = this.$el.offsetWidth;
                                this.startHeight = this.$el.offsetHeight;
                                this.startLeft = this.$el.offsetLeft;
                                this.startTop = this.$el.offsetTop;
        
                                document.addEventListener('mousemove', this.boundResize);
                                document.addEventListener('mouseup', this.boundStopResize);
                            } else if (e.target.classList.contains('topbar')) {
                                // Start dragging
                                this.isDragging = true;
                                this.posX = e.clientX - this.$el.offsetLeft;
                                this.posY = e.clientY - this.$el.offsetTop;
                                document.addEventListener('mousemove', this.boundDrag);
                                document.addEventListener('mouseup', this.boundStopDrag);
                            }
                        });
                    },
                    close() {
                        this.show = false;
                    },
                    drag(e) {
                        if (this.isDragging) {
                            this.$el.style.left = (e.clientX - this.posX) + 'px';
                            this.$el.style.top = (e.clientY - this.posY) + 'px';
                        }
                    },
                    stopDrag() {
                        this.isDragging = false;
                        this.saveState();
                        document.removeEventListener('mousemove', this.boundDrag);
                        document.removeEventListener('mouseup', this.boundStopDrag);
                    },
                    resize(e) {
                        if (this.isResizing) {
                            let deltaX = e.clientX - this.startX;
                            let deltaY = e.clientY - this.startY;
        
                            if (this.resizeDirection === 'bottom-right') {
                                this.width = this.startWidth + deltaX;
                                this.height = this.startHeight + deltaY;
                            } else if (this.resizeDirection === 'bottom-left') {
                                this.width = this.startWidth - deltaX;
                                this.height = this.startHeight + deltaY;
                                this.$el.style.left = this.startLeft + deltaX + 'px';
                            } else if (this.resizeDirection === 'top-right') {
                                this.width = this.startWidth + deltaX;
                                this.height = this.startHeight - deltaY;
                                this.$el.style.top = this.startTop + deltaY + 'px';
                            } else if (this.resizeDirection === 'top-left') {
                                this.width = this.startWidth - deltaX;
                                this.height = this.startHeight - deltaY;
                                this.$el.style.left = this.startLeft + deltaX + 'px';
                                this.$el.style.top = this.startTop + deltaY + 'px';
                            }
        
                            // Enforce minimum size
                            this.width = Math.max(this.width, 100);
                            this.height = Math.max(this.height, 100);
        
                            this.$el.style.width = this.width + 'px';
                            this.$el.style.height = this.height + 'px';
                        }
                    },
                    stopResize() {
                        this.isResizing = false;
                        this.saveState();
                        document.removeEventListener('mousemove', this.boundResize);
                        document.removeEventListener('mouseup', this.boundStopResize);
                    },
                    saveState() {
                        localStorage.setItem(this.persist?.value ?? 'persist_panel_state', JSON.stringify({
                            width: this.width,
                            height: this.height,
                            left: this.$el.offsetLeft,
                            top: this.$el.offsetTop
                        }));
                    },
                    ...extraConfig
                };
            },
        };
    });
}
