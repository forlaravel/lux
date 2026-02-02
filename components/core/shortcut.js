export default function (Alpine) {
    Alpine.directive("shortcut", (el, directive, { cleanup }) => {
        const modifiers = directive.modifiers;

        if (!modifiers.length) return;

        const modifierKeys = ["ctrl", "meta", "shift", "alt"];
        const requiredModifiers = modifiers.filter((m) => modifierKeys.includes(m));
        const key = modifiers.find((m) => !modifierKeys.includes(m));

        if (!key) return;

        const keyMap = {
            escape: "Escape",
            esc: "Escape",
            enter: "Enter",
            space: " ",
            tab: "Tab",
            up: "ArrowUp",
            down: "ArrowDown",
            left: "ArrowLeft",
            right: "ArrowRight",
            backspace: "Backspace",
            delete: "Delete",
            slash: "/",
            period: ".",
            comma: ",",
        };

        const targetKey = keyMap[key] || key;
        const hasCommandModifier = requiredModifiers.some((m) =>
            ["ctrl", "meta", "alt"].includes(m),
        );

        function handler(event) {
            if (requiredModifiers.includes("ctrl") !== event.ctrlKey) return;
            if (requiredModifiers.includes("meta") !== event.metaKey) return;
            if (requiredModifiers.includes("shift") !== event.shiftKey) return;
            if (requiredModifiers.includes("alt") !== event.altKey) return;

            if (event.key.toLowerCase() !== targetKey.toLowerCase()) return;

            // Plain keys (no ctrl/meta/alt) should not fire inside inputs
            if (!hasCommandModifier) {
                const tag = document.activeElement?.tagName;
                if (
                    tag === "INPUT" ||
                    tag === "TEXTAREA" ||
                    tag === "SELECT" ||
                    document.activeElement?.isContentEditable
                ) {
                    return;
                }
            }

            if (el.disabled || el.getAttribute("aria-disabled") === "true")
                return;

            event.preventDefault();
            el.click();
            el.focus();
        }

        window.addEventListener("keydown", handler);

        cleanup(() => {
            window.removeEventListener("keydown", handler);
        });
    });
}
