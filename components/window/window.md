# Window
A draggable, floating window for displaying content.

## Example
```html
<x-window :show="true">
    <x-window.title>
        Drag me
    </x-window.title>
    <x-window.content>
        The content
    </x-window.content>
</x-window>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish window
```

## Properties

### window
| Prop   | Description                  | Type      | Default |
|--------|------------------------------|-----------|---------|
| `show` | Whether the window is visible | `boolean` | `false` |

## Livewire

Use `wire:model` to bind the window's visibility to a Livewire property:

```html
<x-window wire:model="showWindow">
    <x-window.title>My Window</x-window.title>
    <x-window.content>...</x-window.content>
</x-window>
```

## Accessibility

- Add `role="dialog"` and `aria-label` (or `aria-labelledby` pointing to the title element) to the `<x-window>` to identify it as a dialog for screen readers.
- The built-in close button in `<x-window.title>` contains an icon-only SVG. Consider adding an `aria-label="Close"` to that button if you customize the title component.