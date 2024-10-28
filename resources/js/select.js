export default function (Alpine) {
    Alpine.directive("select", (el, directive, { evaluate }) => {
        let extraConfig = directive.expression ? evaluate(directive.expression) : {};
        if (!directive.value) handleRoot(el, Alpine, extraConfig);
        else if (directive.value === 'content') handleContent(el, Alpine, extraConfig);
    }).before("bind");
}

function handleRoot(el, Alpine, extraConfig) {
    Alpine.bind(el, () => {
        return {
            "@keydown.up.prevent"() {
                this.open ? this.moveCursor(-1) : this.show();
            },
            "@keydown.down.prevent"() {
                this.open ? this.moveCursor(1) : this.show();
            },
            "@keyup"(event) {
                this.moveCursorBasedOnTyping(event);
            },
            "@keydown.enter.prevent"() {
                this.open ? this.select(this.cursor) : this.show();
            },
            "@keydown.esc"() {
                this.close();
            },
            "@click.away"() {
                this.open = false;
            },
            "x-data"() {
                return {
                    open: false,

                    multiple: false,
                    inputText: '',
                    clientSearch: true,
                    selected: '',
                    
                    cursor: null,
                    hasInputFocus: false,
                    dropdownWidth: 0,

                    // Caches the label and value of the items to prevent server side search bug
                    // where the items are could not be displayed after the search
                    labelValueCache: [],
                    observeContent: null,

                    ready: false,
                    init() {
                        new ResizeObserver(() => {
                            this.dropdownWidth = this.$refs.trigger?.offsetWidth
                        }).observe(this.$refs.trigger)

                        this.$watch('inputText', (value) => {
                            if (value.trim().length > 0) {
                                this.open = true;
                            }
                            this.clientSearch && this.items.forEach(item => {
                                item.style.display = item.textContent.toLowerCase().includes(value.trim().toLowerCase()) ? '' : 'none';
                            });

                            this.moveCursorToFirst();

                            this.temporaralilyObserverContent(() => {
                                this.moveCursorToFirst();
                            }, 500);
                        });

                        Alpine.nextTick(() => {
                            this.ready = true
                        })
                    },
                    temporaralilyObserverContent(callback, ms) {
                        if (this.observeContent) this.observeContent.disconnect();
                        this.observeContent = new MutationObserver(callback);
                        this.observeContent.observe(this.$refs.content, { childList: true, subtree: true });
                        setTimeout(() => this.observeContent?.disconnect(), ms);
                    },
                    get items() {
                        return this.$refs.content ? [...this.$refs.content.querySelectorAll('[role=menuitem]')] : []
                    },
                    get activeItems() {
                        return this.items.filter(item => item.getAttribute('data-disabled') !== 'true'
                            && item.style.display !== 'none');
                    },
                    get activeItemsLabelValue() {
                        let items = this.activeItems.map(item => {
                            return {
                                label: item.textContent.trim(),
                                value: item.getAttribute('data-value')
                            }
                        })

                        return items;
                    },
                    get input() {
                        return this.$refs.input?.querySelector('input');
                    },
                    get display() {
                        this.updateLabelValueCache(this.activeItemsLabelValue)

                        let result = this.multiple ? [] : null;

                        if (!this.ready || !this.selected) return result;

                        if (this.multiple) {
                            result = this.selected.map(value => this.labelValueCache.find(item => item.value === value))
                        } else {
                            result = this.labelValueCache.find(item => item.value === this.selected)
                        }

                        return result;
                    },
                    get selectedLabels() {
                        return this.display;
                    },
                    get isEmpty() {
                        return (!this.multiple && !this.selected) || (this.multiple && !this.selected.length)
                    },
                    updateLabelValueCache(items) {
                        items.forEach(item => {
                            if (!this.labelValueCache.find(i => i.value === item.value)) {
                                this.labelValueCache.push(item)
                            }
                        })
                    },
                    isValid(value) {
                        return this.activeItemsLabelValue.map(item => item.value).includes(value);
                    },
                    isSelected(value) {
                        if (this.multiple) {
                            if (this.selected === null) this.selected = [];
                            return this.selected.includes(value);
                        } else {
                            return this.selected === value;
                        }
                    },
                    select(value) {
                        if (!this.isValid(value)) return;

                        if (this.multiple) {
                            Alpine.nextTick(() => {
                                if (this.selected === null) this.selected = [];
                                if (this.selected.includes(value)) {
                                    this.selected = this.selected.filter(v => v !== value);
                                } else {
                                    this.selected = [...this.selected, value];
                                }
                            });
                        } else {
                            Alpine.nextTick(() => {
                                this.selected = value;
                            });
                        }
                        if (!this.multiple) {
                            this.close()
                        }
                        this.inputText = ''
                    },
                    close() {
                        this.open = false
                        this.$refs.trigger.focus()
                        Alpine.nextTick(() => {
                            this.open = false
                            this.$refs.trigger.focus()
                        });
                    },
                    show() {
                        this.open = true
                        if (!this.cursor) this.moveCursorToFirst()
                        if (this.input) this.$refs.input.querySelector('input').focus()
                    },
                    toggle() {
                        this.open ? this.close() : this.show()
                    },
                    onTrigger() {
                        if (this.input) {
                            this.$refs.input.querySelector('input').focus()
                        }
                        this.toggle()
                    },
                    reset() {
                        if (this.multiple) {
                            // Remove the last entry
                            this.selected = this.selected.slice(0, -1)
                        } else {
                            this.selected = null
                        }
                        this.open = true
                    },
                    moveCursorBasedOnTyping($event) {
                        if (this.input) return;

                        let key = $event.key.toLowerCase();
                        if (!/^[a-z0-9]$/i.test(key)) return;

                        this.show()
                        this.searchTerm = (this.searchTerm || '') + key;

                        clearTimeout(this.searchTimeout);
                        this.searchTimeout = setTimeout(() => this.searchTerm = '', 500);

                        let items = this.activeItemsLabelValue.filter(item => item.label.toLowerCase().startsWith(this.searchTerm));

                        if (items.length) {
                            this.cursor = items[0].value;
                        }
                    },
                    moveCursor(steps = 1) {
                        let items = this.activeItemsLabelValue.map(item => item.value);

                        if (!items.length) return;

                        let currentIndex = items.indexOf(this.cursor);
                        let nextIndex = currentIndex + steps;

                        if (nextIndex < 0) nextIndex = items.length - 1;
                        if (nextIndex >= items.length) nextIndex = 0;

                        this.cursor = items[nextIndex];
                    },
                    moveCursorToFirst() {
                        this.cursor = this.activeItemsLabelValue[0]?.value;
                    },

                    ...extraConfig,
                };
            },
        };
    });
}

function handleContent(el, Alpine, extraConfig = {}) {
    Alpine.bind(el, () => {
        return {
            "@click.away"() {
                this.close();
            },
            "x-transition:enter"() {
                return 'transition ease-out duration-200';
            },
            "x-transition:enter-start"() {
                return 'opacity-0 transform scale-95';
            },
            "x-transition:enter-end"() {
                return 'opacity-100 transform scale-100';
            },
            "x-transition:leave"() {
                return 'transition ease-in duration-50';
            },
            "x-transition:leave-start"() {
                return 'opacity-100 transform scale-100';
            },
            "x-transition:leave-end"() {
                return 'opacity-0 transform scale-95';
            },
            "x-show"() {
                return this.open;
            },
            "x-anchor.bottom-start"() {
                return this.$refs.trigger;
            },
            ":data-side"() {
                return this.$refs.trigger.offsetTop < this.$anchor.y ? 'bottom' : 'top';
            },
            "x-cloak"() {
                return true;
            },
            "x-bind:style"() {
                return { width: `${this.dropdownWidth}px` };
            }
        };
    });
}