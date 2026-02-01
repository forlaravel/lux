export default function (Alpine) {
    Alpine.data('menubar', () => ({
        activeMenu: null,
        _root: null,

        init() {
            this._root = this.$el;
        },

        getTriggers() {
            return [...this._root.querySelectorAll('.lux-menubar-trigger')];
        },

        currentTriggerIndex() {
            const triggers = this.getTriggers();
            const idx = triggers.indexOf(document.activeElement);
            if (idx !== -1) return idx;
            if (this.activeMenu) {
                return triggers.findIndex(t => {
                    const menu = t.closest('.lux-menubar-menu');
                    return menu && menu._x_dataStack && menu._x_dataStack[0]?.menuId === this.activeMenu;
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
            if (this.activeMenu !== null) {
                const menu = triggers[i].closest('.lux-menubar-menu');
                const menuId = menu?._x_dataStack?.[0]?.menuId;
                if (menuId) this.activeMenu = menuId;
            }
        },

        openAndFocusFirst(delta) {
            const triggers = this.getTriggers();
            if (!triggers.length) return;
            const cur = this.currentTriggerIndex();
            const i = ((cur + delta) % triggers.length + triggers.length) % triggers.length;
            const trigger = triggers[i];
            const menu = trigger.closest('.lux-menubar-menu');
            const menuId = menu?._x_dataStack?.[0]?.menuId;
            if (menuId) this.activeMenu = menuId;
            trigger.focus();
            this.$nextTick(() => {
                const content = document.querySelector('[data-menubar-content][data-menu-id="' + this.activeMenu + '"]');
                if (!content) return;
                const items = [...content.querySelectorAll('[role=menuitem]:not([disabled]):not([data-disabled])')];
                if (items.length) items[0].focus();
            });
        },

        focusFirstItem() {
            this.$nextTick(() => {
                const content = document.querySelector('[data-menubar-content][data-menu-id="' + this.activeMenu + '"]');
                if (!content) return;
                const items = [...content.querySelectorAll('[role=menuitem]:not([disabled]):not([data-disabled])')];
                if (items.length) items[0].focus();
            });
        },

        focusLastItem() {
            this.$nextTick(() => {
                const content = document.querySelector('[data-menubar-content][data-menu-id="' + this.activeMenu + '"]');
                if (!content) return;
                const items = [...content.querySelectorAll('[role=menuitem]:not([disabled]):not([data-disabled])')];
                if (items.length) items[items.length - 1].focus();
            });
        },

        contentNav(el, dir) {
            const items = [...el.querySelectorAll('[role=menuitem]:not([disabled]):not([data-disabled])')];
            const idx = items.indexOf(document.activeElement);
            if (dir === 'down') {
                const next = idx < items.length - 1 ? idx + 1 : 0;
                items[next]?.focus();
            } else {
                const prev = idx > 0 ? idx - 1 : items.length - 1;
                items[prev]?.focus();
            }
        },

        contentHome(el) {
            const items = [...el.querySelectorAll('[role=menuitem]:not([disabled]):not([data-disabled])')];
            if (items.length) items[0].focus();
        },

        contentEnd(el) {
            const items = [...el.querySelectorAll('[role=menuitem]:not([disabled]):not([data-disabled])')];
            if (items.length) items[items.length - 1].focus();
        },

        contentEscape() {
            const idx = this.currentTriggerIndex();
            this.activeMenu = null;
            const triggers = this.getTriggers();
            if (triggers[idx]) triggers[idx].focus();
        }
    }));
}
