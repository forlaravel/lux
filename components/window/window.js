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
                    boundDrag: null,
                    boundStopDrag: null,
                    boundResize: null,
                    boundStopResize: null,
                    boundTouchDrag: null,
                    boundTouchStopDrag: null,
                    boundTouchResize: null,
                    boundTouchStopResize: null,
                    show: extraConfig.show ?? true,
                    ...extraConfig,
                    init() {
                        try {
                            const savedState = JSON.parse(localStorage.getItem(this.persist?.value ?? 'persist_panel_state'));
                            if (savedState) {
                                this.width = savedState.width;
                                this.height = savedState.height;
                                this.$el.style.left = savedState.left + 'px';
                                this.$el.style.top = savedState.top + 'px';
                                this.$el.style.width = this.width + 'px';
                                this.$el.style.height = this.height + 'px';
                            }
                        } catch (e) {
                            // localStorage may not be available in private browsing
                        }

                        this.boundDrag = this.drag.bind(this);
                        this.boundStopDrag = this.stopDrag.bind(this);
                        this.boundResize = this.resize.bind(this);
                        this.boundStopResize = this.stopResize.bind(this);
                        this.boundTouchDrag = this.touchDrag.bind(this);
                        this.boundTouchStopDrag = this.touchStopDrag.bind(this);
                        this.boundTouchResize = this.touchResize.bind(this);
                        this.boundTouchStopResize = this.touchStopResize.bind(this);

                        // Mouse events
                        this.$el.addEventListener('mousedown', (e) => {
                            if (e.target.closest('.resize-handle')) {
                                this.startResize(e.clientX, e.clientY, e.target.closest('.resize-handle'));
                                document.addEventListener('mousemove', this.boundResize);
                                document.addEventListener('mouseup', this.boundStopResize);
                            } else if (e.target.closest('.topbar')) {
                                this.startDrag(e.clientX, e.clientY);
                                document.addEventListener('mousemove', this.boundDrag);
                                document.addEventListener('mouseup', this.boundStopDrag);
                            }
                        });

                        // Touch events
                        this.$el.addEventListener('touchstart', (e) => {
                            const touch = e.touches[0];
                            if (e.target.closest('.resize-handle')) {
                                e.preventDefault();
                                this.startResize(touch.clientX, touch.clientY, e.target.closest('.resize-handle'));
                                document.addEventListener('touchmove', this.boundTouchResize, { passive: false });
                                document.addEventListener('touchend', this.boundTouchStopResize);
                            } else if (e.target.closest('.topbar')) {
                                e.preventDefault();
                                this.startDrag(touch.clientX, touch.clientY);
                                document.addEventListener('touchmove', this.boundTouchDrag, { passive: false });
                                document.addEventListener('touchend', this.boundTouchStopDrag);
                            }
                        });
                    },
                    startDrag(clientX, clientY) {
                        this.isDragging = true;
                        this.posX = clientX - this.$el.offsetLeft;
                        this.posY = clientY - this.$el.offsetTop;
                    },
                    startResize(clientX, clientY, handle) {
                        this.isResizing = true;
                        this.resizeDirection = handle.classList.contains('top-left') ? 'top-left' :
                                               handle.classList.contains('top-right') ? 'top-right' :
                                               handle.classList.contains('bottom-left') ? 'bottom-left' :
                                               'bottom-right';
                        this.startX = clientX;
                        this.startY = clientY;
                        this.startWidth = this.$el.offsetWidth;
                        this.startHeight = this.$el.offsetHeight;
                        this.startLeft = this.$el.offsetLeft;
                        this.startTop = this.$el.offsetTop;
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
                    touchDrag(e) {
                        if (this.isDragging) {
                            e.preventDefault();
                            const touch = e.touches[0];
                            this.$el.style.left = (touch.clientX - this.posX) + 'px';
                            this.$el.style.top = (touch.clientY - this.posY) + 'px';
                        }
                    },
                    touchStopDrag() {
                        this.isDragging = false;
                        this.saveState();
                        document.removeEventListener('touchmove', this.boundTouchDrag);
                        document.removeEventListener('touchend', this.boundTouchStopDrag);
                    },
                    resize(e) {
                        if (this.isResizing) {
                            this.applyResize(e.clientX, e.clientY);
                        }
                    },
                    stopResize() {
                        this.isResizing = false;
                        this.saveState();
                        document.removeEventListener('mousemove', this.boundResize);
                        document.removeEventListener('mouseup', this.boundStopResize);
                    },
                    touchResize(e) {
                        if (this.isResizing) {
                            e.preventDefault();
                            const touch = e.touches[0];
                            this.applyResize(touch.clientX, touch.clientY);
                        }
                    },
                    touchStopResize() {
                        this.isResizing = false;
                        this.saveState();
                        document.removeEventListener('touchmove', this.boundTouchResize);
                        document.removeEventListener('touchend', this.boundTouchStopResize);
                    },
                    applyResize(clientX, clientY) {
                        let deltaX = clientX - this.startX;
                        let deltaY = clientY - this.startY;

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

                        this.width = Math.max(this.width, 100);
                        this.height = Math.max(this.height, 100);

                        this.$el.style.width = this.width + 'px';
                        this.$el.style.height = this.height + 'px';
                    },
                    saveState() {
                        try {
                            localStorage.setItem(this.persist?.value ?? 'persist_panel_state', JSON.stringify({
                                width: this.width,
                                height: this.height,
                                left: this.$el.offsetLeft,
                                top: this.$el.offsetTop
                            }));
                        } catch (e) {
                            // localStorage may not be available in private browsing
                        }
                    },
                };
            },
        };
    });
}
