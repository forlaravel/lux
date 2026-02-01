export default function (Alpine) {
    Alpine.data('navigationMenu', () => ({
        activeItem: null,
        _leaveTimeout: null,
        _root: null,

        init() {
            this._root = this.$el;
        },

        showItem(id) {
            clearTimeout(this._leaveTimeout);
            this.activeItem = id;
        },

        hideItem() {
            this._leaveTimeout = setTimeout(() => { this.activeItem = null; }, 100);
        },

        toggleItem(id) {
            if (this.activeItem === id) {
                this.activeItem = null;
            } else {
                clearTimeout(this._leaveTimeout);
                this.activeItem = id;
            }
        },

        getTriggers() {
            return [...this._root.querySelectorAll('.lux-navigation-menu-trigger')];
        },

        currentTriggerIndex() {
            const triggers = this.getTriggers();
            const idx = triggers.indexOf(document.activeElement);
            if (idx !== -1) return idx;
            if (this.activeItem) {
                return triggers.findIndex(t => {
                    const item = t.closest('.lux-navigation-menu-item');
                    return item && item._x_dataStack && item._x_dataStack[0]?.itemId === this.activeItem;
                });
            }
            return 0;
        },

        focusTrigger(delta) {
            const triggers = this.getTriggers();
            if (!triggers.length) return;
            const cur = this.currentTriggerIndex();
            const i = ((cur + delta) % triggers.length + triggers.length) % triggers.length;
            triggers[i].focus();
            this.activeItem = null;
        },

        openAndFocusFirst(delta) {
            const triggers = this.getTriggers();
            if (!triggers.length) return;
            const cur = this.currentTriggerIndex();
            const i = ((cur + delta) % triggers.length + triggers.length) % triggers.length;
            const trigger = triggers[i];
            const item = trigger.closest('.lux-navigation-menu-item');
            const itemId = item?._x_dataStack?.[0]?.itemId;
            if (itemId) {
                this.activeItem = itemId;
                trigger.focus();
                this.$nextTick(() => {
                    const content = document.querySelector('[data-navmenu-content][data-item-id="' + this.activeItem + '"]');
                    if (!content) return;
                    const links = [...content.querySelectorAll('a, button, [tabindex]:not([tabindex="-1"])')];
                    if (links.length) links[0].focus();
                });
            } else {
                trigger.focus();
                this.activeItem = null;
            }
        },

        focusFirstLink(id) {
            clearTimeout(this._leaveTimeout);
            this.activeItem = id;
            this.$nextTick(() => {
                const content = document.querySelector('[data-navmenu-content][data-item-id="' + id + '"]');
                if (!content) return;
                const links = [...content.querySelectorAll('a, button, [tabindex]:not([tabindex="-1"])')];
                if (links.length) links[0].focus();
            });
        },

        getContentLinks(el) {
            return [...el.querySelectorAll('a, button, [tabindex]:not([tabindex="-1"])')];
        },

        contentNav(el, dir) {
            const links = this.getContentLinks(el);
            const idx = links.indexOf(document.activeElement);
            if (dir === 'down') {
                const next = idx < links.length - 1 ? idx + 1 : 0;
                links[next]?.focus();
            } else {
                const prev = idx > 0 ? idx - 1 : links.length - 1;
                links[prev]?.focus();
            }
        },

        contentEscape() {
            const idx = this.currentTriggerIndex();
            this.activeItem = null;
            const triggers = this.getTriggers();
            if (triggers[idx]) triggers[idx].focus();
        }
    }));
}
