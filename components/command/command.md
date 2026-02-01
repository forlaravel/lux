# Command
A command palette for quick access to actions. Includes a search input, grouped items with icons and keyboard shortcuts, and a dialog wrapper.

## Example
```html
<x-command.dialog>
    <x-slot:trigger>
        <button type="button" class="inline-flex w-full items-center gap-2 whitespace-nowrap rounded-md border border-input bg-background px-4 py-2 text-sm text-muted-foreground shadow-sm hover:bg-accent hover:text-accent-foreground sm:w-64">
            <svg class="h-4 w-4 shrink-0 opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
            <span>Type a command or search...</span>
            <kbd class="ml-auto pointer-events-none hidden h-5 select-none items-center gap-1 rounded border bg-muted px-1.5 font-mono text-[10px] font-medium sm:flex"><span class="text-xs">⌘</span>K</kbd>
        </button>
    </x-slot:trigger>
    <x-command.input placeholder="Type a command or search..." />
    <x-command.list>
        <x-command.empty>No results found.</x-command.empty>
        <x-command.group heading="Suggestions">
            <x-command.item>
                <svg class="h-4 w-4 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="4" rx="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="21" y1="10" y2="10"/></svg>
                <span>Calendar</span>
            </x-command.item>
            <x-command.item>
                <svg class="h-4 w-4 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/><line x1="9" x2="9.01" y1="9" y2="9"/><line x1="15" x2="15.01" y1="9" y2="9"/></svg>
                <span>Search Emoji</span>
            </x-command.item>
            <x-command.item disabled>
                <svg class="h-4 w-4 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="16" height="20" x="4" y="2" rx="2"/><line x1="8" x2="16" y1="6" y2="6"/><line x1="16" x2="16" y1="14" y2="18"/><path d="M16 10h.01"/><path d="M12 10h.01"/><path d="M8 10h.01"/><path d="M12 14h.01"/><path d="M8 14h.01"/><path d="M12 18h.01"/><path d="M8 18h.01"/></svg>
                <span>Calculator</span>
            </x-command.item>
        </x-command.group>
        <x-command.separator />
        <x-command.group heading="Settings">
            <x-command.item>
                <svg class="h-4 w-4 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                <span>Profile</span>
                <x-command.shortcut>⌘P</x-command.shortcut>
            </x-command.item>
            <x-command.item>
                <svg class="h-4 w-4 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="14" x="2" y="5" rx="2"/><line x1="2" x2="22" y1="10" y2="10"/></svg>
                <span>Billing</span>
                <x-command.shortcut>⌘B</x-command.shortcut>
            </x-command.item>
            <x-command.item>
                <svg class="h-4 w-4 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"/><circle cx="12" cy="12" r="3"/></svg>
                <span>Settings</span>
                <x-command.shortcut>⌘S</x-command.shortcut>
            </x-command.item>
        </x-command.group>
    </x-command.list>
</x-command.dialog>
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

### command.dialog
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `open` | Whether the command dialog is open | `boolean` | `false` |

## Livewire

Use `wire:model` to bind the dialog's open state to a Livewire property:

```html
<x-command.dialog wire:model="showCommand">
    ...
</x-command.dialog>
```

## Accessibility

- Always provide a `placeholder` or `aria-label` on `<x-command.input>` so the search field is announced to screen readers.
- When using `<x-command>` standalone (not inside `<x-command.dialog>`), consider adding `aria-label` to the root element to give it an accessible name.
- If command items contain only icons (no visible text), add `sr-only` text inside the item so screen readers can announce its purpose.
- The command dialog can be toggled with `⌘K` (Mac) or `Ctrl+K` (Windows/Linux) and closed with `Escape`.
