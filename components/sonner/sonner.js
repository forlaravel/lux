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
    const globalKeys = ["richColors", "visibleToasts", "gap", "offset"];

    Alpine.bind(el, () => {
        return {
            "x-data"() {
                return {
                    toasts: [],
                    richColors: false,
                    stacked: true,
                    visibleToasts: 3,
                    gap: 14,
                    offset: 32,
                    _hoveredPosition: null,
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

                        // Pause/resume all timers in a position group on hover
                        this.$watch("_hoveredPosition", (pos, oldPos) => {
                            if (oldPos) {
                                this.toasts
                                    .filter(
                                        (t) =>
                                            !t.exiting &&
                                            t.position === oldPos
                                    )
                                    .forEach((t) => this.resumeTimer(t.id));
                            }
                            if (pos) {
                                this.toasts
                                    .filter(
                                        (t) =>
                                            !t.exiting && t.position === pos
                                    )
                                    .forEach((t) => this.pauseTimer(t.id));
                            }
                        });
                    },

                    destroy() {
                        window.removeEventListener("sonner", this._onSonner);
                        window.removeEventListener(
                            "sonner-dismiss",
                            this._onDismiss
                        );
                    },

                    add(options = {}) {
                        for (const key of globalKeys) {
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
                            position: options.position || "bottom-right",
                            message: options.message || "",
                            description: options.description || "",
                            type: options.type || "default",
                            duration,
                            dismissible: options.dismissible !== false,
                            action: options.action || null,
                            cancel: options.cancel || null,
                            closeButton: options.closeButton ?? false,
                            stacked: options.stacked ?? this.stacked,
                            exiting: false,
                            _remaining: duration,
                            _timeout: null,
                            _height: 0,
                        };

                        this.toasts.push(toast);

                        if (typeof options._resolve === "function") {
                            options._resolve(id);
                        }

                        this.$nextTick(() => {
                            const toastEl = this.$el.querySelector(
                                `[data-sonner-id="${id}"]`
                            );
                            if (toastEl) {
                                // Measure via reactive proxy so layout recomputes before paint
                                const t = this.toasts.find(
                                    (t) => t.id === id
                                );
                                if (t) t._height = toastEl.offsetHeight;
                            }
                            requestAnimationFrame(() => {
                                const el = this.$el.querySelector(
                                    `[data-sonner-id="${id}"]`
                                );
                                if (el) {
                                    el.setAttribute("data-state", "open");
                                }
                            });
                        });

                        this._startTimer(toast);

                        // Evict oldest per position
                        const posActive = this.toasts.filter(
                            (t) =>
                                !t.exiting && t.position === toast.position
                        );
                        while (posActive.length > this.visibleToasts) {
                            const oldest = posActive.shift();
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
                        }, 400);
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

                    // --- Layout helpers ---

                    positions() {
                        return [
                            ...new Set(this.toasts.map((t) => t.position)),
                        ];
                    },

                    toastsAt(pos) {
                        return this.toasts.filter(
                            (t) => t.position === pos
                        );
                    },

                    _activeAt(pos) {
                        return this.toasts.filter(
                            (t) => !t.exiting && t.position === pos
                        );
                    },

                    _stackedAt(pos) {
                        return this.toasts.filter(
                            (t) =>
                                !t.exiting &&
                                t.position === pos &&
                                t.stacked
                        );
                    },

                    hasStackedAt(pos) {
                        return this._stackedAt(pos).length > 0;
                    },

                    viewportStyle(pos) {
                        const stacked = this._stackedAt(pos);
                        if (!stacked.length) return {};

                        const front = stacked[stacked.length - 1];
                        if (!front._height) return {};

                        const expanded = this._hoveredPosition === pos;
                        const peekCount = Math.min(
                            stacked.length - 1,
                            this.visibleToasts - 1
                        );

                        if (expanded) {
                            let total = 0;
                            stacked.forEach(
                                (t) => (total += t._height || 0)
                            );
                            total +=
                                Math.max(0, stacked.length - 1) * this.gap;
                            return { height: total + "px" };
                        }

                        return {
                            height:
                                (front._height || 0) +
                                peekCount * this.gap +
                                "px",
                        };
                    },

                    toastStyle(id) {
                        const toast = this.toasts.find(
                            (t) => t.id === id
                        );
                        if (!toast || !toast.stacked) return {};

                        const stacked = this._stackedAt(toast.position);
                        const idx = stacked.findIndex(
                            (t) => t.id === id
                        );
                        if (idx === -1) return {};

                        const stackIndex = stacked.length - 1 - idx;
                        const isBottom =
                            toast.position.startsWith("bottom");
                        const expanded =
                            this._hoveredPosition === toast.position;
                        const front = stacked[stacked.length - 1];

                        let y = 0;

                        if (expanded) {
                            for (
                                let i = idx + 1;
                                i < stacked.length;
                                i++
                            ) {
                                y +=
                                    (stacked[i]._height || 0) + this.gap;
                            }
                        } else {
                            y = stackIndex * this.gap;
                        }

                        const scale = expanded
                            ? 1
                            : Math.max(1 - stackIndex * 0.05, 0.8);
                        const visible =
                            expanded || stackIndex < this.visibleToasts;
                        const direction = isBottom ? -1 : 1;

                        const style = {
                            position: "absolute",
                            [isBottom ? "bottom" : "top"]: "0",
                            width: "var(--sonner-toast-width)",
                            transform: `translateY(${y * direction}px) scale(${scale})`,
                            transformOrigin: isBottom
                                ? "bottom center"
                                : "top center",
                            zIndex: 100 - stackIndex,
                            pointerEvents: visible ? "auto" : "none",
                        };

                        // Only force-hide overflow toasts; CSS handles enter/exit opacity
                        if (!visible) {
                            style.opacity = "0";
                        }

                        // Back toasts: lock to front toast height so peek is uniform
                        if (!expanded && stackIndex > 0 && front._height) {
                            style.height = front._height + "px";
                            style.overflow = "hidden";
                        }

                        return style;
                    },

                    isFront(id) {
                        const toast = this.toasts.find(
                            (t) => t.id === id
                        );
                        if (!toast || !toast.stacked) return true;
                        const stacked = this._stackedAt(toast.position);
                        return (
                            stacked.length === 0 ||
                            stacked[stacked.length - 1].id === id
                        );
                    },

                    isExpanded(id) {
                        const toast = this.toasts.find(
                            (t) => t.id === id
                        );
                        if (!toast) return false;
                        if (!toast.stacked) return true;
                        return (
                            this._hoveredPosition === toast.position
                        );
                    },

                    ...extraConfig,
                };
            },
        };
    });
}
