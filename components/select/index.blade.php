@props([
    'value' => null,
    'tag' => 'div',
    'multiple' => false,
    'searchable' => false,
    'placeholder' => 'Select an option',
    'clientSearch' => true,
])

<{{ $tag }} 
    {{ $attributes->except(['wire:model', 'wire:model.defer', 'wire:model.lazy', 'wire:model.live']) }}

    @keydown.up.prevent="open ? moveCursor(-1) : show()"
    @keydown.down.prevent="open ? moveCursor(1) : show()"
    @keyup="moveCursorBasedOnTyping($event)"
    @keydown.enter.prevent="open ? select(cursor) : show()"
    @keydown.esc="close"
    @click.away="open = false"

    x-data="{ 
        open: false,
        multiple: @js($multiple),
        cursor: null,
        hasInputFocus: false,
        inputText: {!! $attributes->tryWireModelWithFallbackTo('', 'wire:search') !!},
        clientSearch: @js($clientSearch),
        dropdownWidth: 0,
        selected: {!! $attributes->tryWireModelWithFallbackTo($value) !!},

        // Caches the label and value of the items to prevent server side search bug
        // where the items are could not be displayed after the search
        labelValueCache: [],
        observeContent: null,

        ready: false,
        init() {
            new ResizeObserver(() => {
                this.dropdownWidth = $refs.trigger?.offsetWidth
            }).observe($refs.trigger)

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
            $refs.trigger.focus()
            Alpine.nextTick(() => {
                this.open = false
                $refs.trigger.focus()
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
    }"
>
    {{ $slot }}
</{{ $tag }}>