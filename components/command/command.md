# Command Dialog
A set of components used to create customizable and interactive command dialogs. It includes a dialog wrapper, input field, and several utility elements like groups, items, lists, and shortcuts.

## Examples

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

### x-command-dialog
This is the main wrapper for the command dialog.

| Prop        | Description                        | Type   | Default |
|-------------|------------------------------------|--------|---------|
| `x-data`    | Initializes Alpine.js reactive data | `string` | N/A     |
| `@keydown.up` | Handles up arrow key navigation | `event`  | N/A     |
| `@keydown.down` | Handles down arrow key navigation | `event`  | N/A     |
| `x-trap` | Keeps focus within the dialog | `string` | N/A |

### x-command-input
An input field within the dialog.

| Prop       | Description                         | Type     | Default |
|------------|-------------------------------------|----------|---------|
| `placeholder` | Placeholder text for the input | `string` | N/A |
| `x-ref`    | Alpine.js reference to the element | `string` | `input` |
| `x-model`  | Two-way data binding for input value | `string` | `search` |

### x-command-group
A wrapper to group items within the list.

| Prop      | Description     | Type     | Default |
|-----------|-----------------|----------|---------|
| `heading` | Heading for the group | `string` | N/A  |

### x-command-item
An individual command item.

| Prop       | Description                  | Type      | Default |
|------------|------------------------------|-----------|---------|
| `disabled` | Whether the item is disabled | `boolean` | `false` |

### x-command-list
A container for command items, with scroll capabilities.

| Prop        | Description            | Type     | Default |
|-------------|------------------------|----------|---------|
| `x-ref`     | Alpine.js reference to the element | `string` | `list` |

### x-command-separator
A separator line to divide different sections.

| Prop | Description | Type   | Default |
|------|-------------|--------|---------|
| `x-data` | Initializes Alpine.js | `string` | N/A |

### x-command-shortcut
Displays keyboard shortcuts.

| Prop | Description                     | Type     | Default |
|------|---------------------------------|----------|---------|
| `class` | Tailwind CSS classes for styling | `string` | 'ml-auto text-xs tracking-widest text-muted-foreground' |

### x-command-empty
Displays when no results are found.

| Prop | Description | Type   | Default |
|------|-------------|--------|---------|
| `x-if` | Conditional rendering with Alpine.js | `string` | `resultCount === 0` |
