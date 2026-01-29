export default function (Alpine) {
    Alpine.directive("sonner", (el, directive, { evaluate }) => {
        let extraConfig = directive.expression ? evaluate(directive.expression) : {};
        if (!directive.value) handleRoot(el, Alpine, extraConfig);
    }).before("bind");

    // Global toast function — returns a promise that resolves with the toast id
    window.toast = function (message, options = {}) {
        return new Promise((resolve) => {
            window.dispatchEvent(
                new CustomEvent("sonner", {
                    detail: { message, ...options, _resolve: resolve },
                })
            );
        });
    };

    window.toast.success = (message, options = {}) =>
        window.toast(message, { ...options, type: "success" });
    window.toast.error = (message, options = {}) =>
        window.toast(message, { ...options, type: "error" });
    window.toast.warning = (message, options = {}) =>
        window.toast(message, { ...options, type: "warning" });
    window.toast.info = (message, options = {}) =>
        window.toast(message, { ...options, type: "info" });
    window.toast.loading = (message, options = {}) =>
        window.toast(message, { ...options, type: "loading", duration: Infinity });
    window.toast.dismiss = (id) => {
        window.dispatchEvent(
            new CustomEvent("sonner-dismiss", { detail: { id } })
        );
    };
}

function handleRoot(el, Alpine, extraConfig) {
    const containerKeys = [
        "position",
        "richColors",
        "stacked",
        "visibleToasts",
        "gap",
        "offset",
    ];

    Alpine.bind(el, () => {
        return {
            "x-data"() {
                return {
                    toasts: [],
                    position: "bottom-right",
                    richColors: false,
                    stacked: true,
                    hovered: false,
                    visibleToasts: 3,
                    gap: 14,
                    offset: 32,
                    _onSonner: null,
                    _onDismiss: null,

                    init() {
                        this._onSonner = (e) => this.add(e.detail);
                        this._onDismiss = (e) => {
                            if (e.detail.id) {
                                this.dismiss(e.detail.id);
                            } else {
                                this.dismissAll();
                            }
                        };

                        window.addEventListener("sonner", this._onSonner);
                        window.addEventListener(
                            "sonner-dismiss",
                            this._onDismiss
                        );
                    },

                    destroy() {
                        window.removeEventListener("sonner", this._onSonner);
                        window.removeEventListener(
                            "sonner-dismiss",
                            this._onDismiss
                        );
                    },

                    add(options = {}) {
                        // Apply container-level options
                        for (const key of containerKeys) {
                            if (options[key] !== undefined) {
                                this[key] = options[key];
                            }
                        }

                        const id =
                            options.id ||
                            Date.now().toString(36) +
                                Math.random().toString(36).slice(2);
                        const duration = options.duration ?? 4000;
                        const toast = {
                            id,
                            message: options.message || "",
                            description: options.description || "",
                            type: options.type || "default",
                            duration,
                            dismissible: options.dismissible !== false,
                            action: options.action || null,
                            cancel: options.cancel || null,
                            closeButton: options.closeButton ?? false,
                            exiting: false,
                            _remaining: duration,
                            _timeout: null,
                            _height: 0,
                        };

                        this.toasts.push(toast);

                        // Return id to caller
                        if (typeof options._resolve === "function") {
                            options._resolve(id);
                        }

                        // Trigger enter animation + measure height
                        requestAnimationFrame(() => {
                            const toastEl = this.$el.querySelector(
                                `[data-sonner-id="${id}"]`
                            );
                            if (toastEl) {
                                toast._height = toastEl.offsetHeight;
                                requestAnimationFrame(() => {
                                    toastEl.setAttribute(
                                        "data-state",
                                        "open"
                                    );
                                });
                            }
                        });

                        // Auto-dismiss
                        this._startTimer(toast);

                        // Evict oldest toasts beyond the visible limit
                        while (
                            this.toasts.filter((t) => !t.exiting).length >
                            this.visibleToasts
                        ) {
                            const oldest = this.toasts.find(
                                (t) => !t.exiting
                            );
                            if (oldest) this.dismiss(oldest.id);
                        }

                        return id;
                    },

                    dismiss(id) {
                        const toast = this.toasts.find((t) => t.id === id);
                        if (!toast || toast.exiting) return;

                        toast.exiting = true;
                        if (toast._timeout) clearTimeout(toast._timeout);

                        const toastEl = this.$el.querySelector(
                            `[data-sonner-id="${id}"]`
                        );
                        if (toastEl) {
                            toastEl.setAttribute("data-state", "closed");
                        }

                        setTimeout(() => {
                            this.toasts = this.toasts.filter(
                                (t) => t.id !== id
                            );
                        }, 300);
                    },

                    dismissAll() {
                        this.toasts
                            .filter((t) => !t.exiting)
                            .forEach((t) => this.dismiss(t.id));
                    },

                    _startTimer(toast) {
                        if (
                            toast.duration === Infinity ||
                            toast._remaining <= 0
                        )
                            return;
                        toast._startedAt = Date.now();
                        toast._timeout = setTimeout(() => {
                            this.dismiss(toast.id);
                        }, toast._remaining);
                    },

                    pauseTimer(id) {
                        const toast = this.toasts.find((t) => t.id === id);
                        if (toast && toast._timeout) {
                            clearTimeout(toast._timeout);
                            toast._timeout = null;
                            toast._remaining -=
                                Date.now() - toast._startedAt;
                        }
                    },

                    resumeTimer(id) {
                        const toast = this.toasts.find((t) => t.id === id);
                        if (
                            toast &&
                            !toast._timeout &&
                            toast.duration !== Infinity
                        ) {
                            this._startTimer(toast);
                        }
                    },

                    // --- Stacked layout ---

                    containerStyle() {
                        if (!this.stacked) return {};

                        const active = this.toasts.filter(
                            (t) => !t.exiting
                        );
                        if (!active.length) return {};

                        const front = active[active.length - 1];
                        const peekCount = Math.min(
                            active.length - 1,
                            this.visibleToasts - 1
                        );

                        if (this.hovered) {
                            let total = 0;
                            active.forEach((t) => (total += t._height || 0));
                            total +=
                                Math.max(0, active.length - 1) * this.gap;
                            return { height: total + "px" };
                        }

                        const peekSize = 8;
                        return {
                            height:
                                (front._height || 0) +
                                peekCount * peekSize +
                                "px",
                        };
                    },

                    toastStyle(id) {
                        if (!this.stacked) return {};

                        const active = this.toasts.filter(
                            (t) => !t.exiting
                        );
                        const idx = active.findIndex((t) => t.id === id);
                        if (idx === -1) return {};

                        // 0 = front (newest), higher = further behind
                        const stackIndex = active.length - 1 - idx;
                        const isBottom =
                            this.position.startsWith("bottom");

                        const peekSize = 8;
                        const scaleStep = 0.05;
                        const expanded = this.hovered;

                        let y = 0;

                        if (expanded) {
                            // Sum heights of all toasts in front of this one
                            for (
                                let i = idx + 1;
                                i < active.length;
                                i++
                            ) {
                                y +=
                                    (active[i]._height || 0) + this.gap;
                            }
                        } else {
                            y = stackIndex * peekSize;
                        }

                        const scale = expanded
                            ? 1
                            : Math.max(1 - stackIndex * scaleStep, 0.8);
                        const visible =
                            expanded || stackIndex < this.visibleToasts;

                        // Bottom: anchor at bottom, grow upward (negative Y)
                        // Top: anchor at top, grow downward (positive Y)
                        const direction = isBottom ? -1 : 1;

                        return {
                            position: "absolute",
                            [isBottom ? "bottom" : "top"]: "0",
                            width: "var(--sonner-toast-width)",
                            transform: `translateY(${y * direction}px) scale(${scale})`,
                            transformOrigin: isBottom
                                ? "bottom center"
                                : "top center",
                            zIndex: 100 - stackIndex,
                            opacity: visible ? "1" : "0",
                            pointerEvents: visible ? "auto" : "none",
                        };
                    },

                    ...extraConfig,
                };
            },
        };
    });
}
