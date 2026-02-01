# Drawer
A slide-in panel with drag-to-dismiss support. Ideal for mobile action sheets, settings panels, and navigation menus.

## Example
```html
<x-drawer>
    <x-drawer.trigger tag="span">
        <x-button variant="outline">Open Drawer</x-button>
    </x-drawer.trigger>
    <x-drawer.content>
        <x-drawer.header>
            <x-drawer.title>Move Goal</x-drawer.title>
            <x-drawer.description>Set your daily activity goal.</x-drawer.description>
        </x-drawer.header>
        <div class="p-4">
            <p>Drawer content here. Drag the handle down to dismiss.</p>
        </div>
        <x-drawer.footer>
            <x-button>Submit</x-button>
            <x-drawer.close>
                <x-button variant="outline" class="w-full">Cancel</x-button>
            </x-drawer.close>
        </x-drawer.footer>
    </x-drawer.content>
</x-drawer>
```

## Example
Right drawer with close button:
```html
<x-drawer direction="right">
    <x-drawer.trigger tag="span">
        <x-button variant="outline">Open Right</x-button>
    </x-drawer.trigger>
    <x-drawer.content :showCloseButton="true">
        <x-drawer.header>
            <x-drawer.title>Settings</x-drawer.title>
            <x-drawer.description>Manage your preferences.</x-drawer.description>
        </x-drawer.header>
        <div class="p-4">
            <p>Settings content here.</p>
        </div>
    </x-drawer.content>
</x-drawer>
```

## Example
Left drawer:
```html
<x-drawer direction="left">
    <x-drawer.trigger tag="span">
        <x-button variant="outline">Open Left</x-button>
    </x-drawer.trigger>
    <x-drawer.content :showCloseButton="true">
        <x-drawer.header>
            <x-drawer.title>Navigation</x-drawer.title>
        </x-drawer.header>
        <div class="p-4">
            <p>Navigation content here.</p>
        </div>
    </x-drawer.content>
</x-drawer>
```

## Example
Top drawer:
```html
<x-drawer direction="top">
    <x-drawer.trigger tag="span">
        <x-button variant="outline">Open Top</x-button>
    </x-drawer.trigger>
    <x-drawer.content>
        <x-drawer.header>
            <x-drawer.title>Notifications</x-drawer.title>
        </x-drawer.header>
        <div class="p-4">
            <p>Notification content here.</p>
        </div>
    </x-drawer.content>
</x-drawer>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish drawer
```

## Properties

### drawer
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `open` | Whether the drawer is open | `boolean` | `false` |
| `direction` | Direction to slide from: `bottom`, `top`, `right`, `left` | `string` | `bottom` |

### drawer.content
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `showHandle` | Show drag handle (top/bottom only) | `boolean` | `true` |
| `showCloseButton` | Show X close button (useful for left/right) | `boolean` | `false` |

### drawer.trigger
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `button` |

> **Note:** When placing an `<x-button>` inside the trigger, set `tag="span"` on the trigger to avoid nesting a `<button>` inside a `<button>` (invalid HTML that breaks click handling).

### drawer.header, drawer.title, drawer.description, drawer.footer, drawer.close
Simple wrapper components with no required props.

### Features

- **Drag to dismiss** -- drag the handle (or swipe on mobile) to close
- **4 directions** -- bottom, top, right, left
- **Close button** -- optional X button for side drawers
- **Backdrop click** -- click outside to close
- **Livewire compatible** -- use `wire:model` to bind open state

## Accessibility

- Always include `<x-drawer.title>` inside `<x-drawer.content>` so the drawer has an accessible name via `aria-labelledby`.
- Include `<x-drawer.description>` when the drawer needs additional context; the content element references it via `aria-describedby`.
- If the drawer title should not be visible, use `sr-only` on the title element rather than omitting it.
