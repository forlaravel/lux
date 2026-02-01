# Popover
A component used to display a popover menu in your application. It includes a main content area that can be shown or hidden, and a trigger to control its visibility.

## Example

### Basic Usage
```html
<x-popover>
    <x-popover.trigger tag="span">
        <x-button variant="outline">Open popover</x-button>
    </x-popover.trigger>

    <x-popover.content>
        <div class="grid gap-4">
            <div class="space-y-2">
                <h4 class="font-medium leading-none">Dimensions</h4>
                <p class="text-sm text-muted-foreground">
                    Set the dimensions for the layer.
                </p>
            </div>
            <div class="grid gap-2">
                <div class="grid grid-cols-3 items-center gap-4">
                    <x-label for="width">Width</x-label>
                    <x-input id="width" value="100%" class="col-span-2 h-8" />
                </div>
                <div class="grid grid-cols-3 items-center gap-4">
                    <x-label for="maxWidth">Max. width</x-label>
                    <x-input id="maxWidth" value="300px" class="col-span-2 h-8" />
                </div>
                <div class="grid grid-cols-3 items-center gap-4">
                    <x-label for="height">Height</x-label>
                    <x-input id="height" value="25px" class="col-span-2 h-8" />
                </div>
                <div class="grid grid-cols-3 items-center gap-4">
                    <x-label for="maxHeight">Max. height</x-label>
                    <x-input id="maxHeight" value="none" class="col-span-2 h-8" />
                </div>
            </div>
        </div>
    </x-popover.content>
</x-popover>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish popover
```



## Properties

### popover
| Prop        | Description                                        | Type      | Default |
|-------------|----------------------------------------------------|-----------|---------|
| `teleport`  | A CSS selector to teleport the popover to          | `string`  | -       |
| `open`      | Whether the popover is open by default             | `boolean` | `false` |
| `wire:model` | Bind open state to a Livewire property (takes precedence over `open`). | `boolean` | `null` |

### popover.trigger
The component responsible for toggling the visibility of the popover content.

| Prop | Description | Type | Default |
|------|-------------|------|---------|
| `tag` | HTML tag to render | `string` | `button` |

> **Note:** When placing an `<x-button>` inside the trigger, set `tag="span"` on the trigger to avoid nesting a `<button>` inside a `<button>` (invalid HTML that breaks click handling).

### popover.content
| Prop        | Description                                        | Type      | Default |
|-------------|----------------------------------------------------|-----------|---------|
| `tag`       | The HTML tag to use for the content container      | `string`  | `div`   |
| `teleport`  | A CSS selector to teleport the content to          | `boolean\|string` | `false` |

## Livewire

Use `wire:model` to bind the popover's open state to a Livewire property:

```html
<x-popover wire:model="showPopover">
    <x-popover.trigger tag="span">
        <x-button variant="outline">Settings</x-button>
    </x-popover.trigger>
    <x-popover.content>
        ...
    </x-popover.content>
</x-popover>
```

Use the `.live` modifier to sync the state on every change:

```html
<x-popover wire:model.live="showPopover">
    ...
</x-popover>
```

## Accessibility

- Provide an accessible name on `<x-popover.content>` via `aria-label` or `aria-labelledby`, since the content uses `role="dialog"` (e.g., `<x-popover.content aria-label="Dimensions settings">`).