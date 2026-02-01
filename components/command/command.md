# Command Dialog
A set of components used to create customizable and interactive command dialogs. It includes a dialog wrapper, input field, and several utility elements like groups, items, lists, and shortcuts.

## Example
```html
<x-command class="rounded-lg border shadow-md">
    <x-command.input placeholder="Type a command or search..." />
    <x-command.list>
        <x-command.empty>No results found.</x-command.empty>
        <x-command.group heading="Suggestions">
            <x-command.item>
                {{-- <x-icon name="calendar" class="mr-2 h-4 w-4" /> --}}
                <span>Calendar</span>
            </x-command.item>
            <x-command.item>
                {{-- <x-icon name="smile" class="mr-2 h-4 w-4" /> --}}
                <span>Search Emoji</span>
            </x-command.item>
            <x-command.item disabled>
                {{-- <x-icon name="calculator" class="mr-2 h-4 w-4" /> --}}
                <span>Calculator</span>
            </x-command.item>
        </x-command.group>
        <x-command.separator />
        <x-command.group heading="Settings">
            <x-command.item>
                {{-- <x-icon name="user" class="mr-2 h-4 w-4" /> --}}
                <span>Profile</span>
                <x-command.shortcut>⌘P</x-command.shortcut>
            </x-command.item>
            <x-command.item>
                {{-- <x-icon name="credit-card" class="mr-2 h-4 w-4" /> --}}
                <span>Billing</span>
                <x-command.shortcut>⌘B</x-command.shortcut>
            </x-command.item>
            <x-command.item>
                {{-- <x-icon name="settings" class="mr-2 h-4 w-4" /> --}}
                <span>Settings</span>
                <x-command.shortcut>⌘S</x-command.shortcut>
            </x-command.item>
        </x-command.group>
    </x-command.list>
    </x-command>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish command
```

## Properties

### command.item
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `disabled` | Whether the command item is disabled | `boolean` | `false` |

### command.group
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `heading` | The heading text for the command group | `string` | `""` |

## Accessibility

- Always provide a `placeholder` or `aria-label` on `<x-command.input>` so the search field is announced to screen readers.
- When using `<x-command>` standalone (not inside `<x-command.dialog>`), consider adding `aria-label` to the root element to give it an accessible name.
- If command items contain only icons (no visible text), add `sr-only` text inside the item so screen readers can announce its purpose.
