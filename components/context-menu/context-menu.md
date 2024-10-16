# Context Menu
A component used to create context menus that appear when users right-click on an element. The context menu can be customized and includes options for items, labels, separators, and triggers.

## Example
```html
<x-context-menu>
    <x-context-menu.trigger class="flex h-[150px] w-[300px] items-center justify-center rounded-md border border-dashed text-sm">
        Right click here
    </x-context-menu.trigger>
    <x-context-menu.content class="w-64">
        <x-context-menu.item inset>
            Back
            <x-context-menu.shortcut>⌘[</x-context-menu.shortcut>
        </x-context-menu.item>
        <x-context-menu.item inset disabled>
            Forward
            <x-context-menu.shortcut>⌘]</x-context-menu.shortcut>
        </x-context-menu.item>
        <x-context-menu.item inset>
            Reload
            <x-context-menu.shortcut>⌘R</x-context-menu.shortcut>
        </x-context-menu.item>
        <x-context-menu.sub>
            <x-context-menu.sub-trigger inset>More Tools</x-context-menu.sub-trigger>
            <x-context-menu.sub-content class="w-48">
                <x-context-menu.item>
                    Save Page As...
                    <x-context-menu.shortcut>⇧⌘S</x-context-menu.shortcut>
                </x-context-menu.item>
                <x-context-menu.item>Create Shortcut...</x-context-menu.item>
                <x-context-menu.item>Name Window...</x-context-menu.item>
                <x-context-menu.separator />
                <x-context-menu.item>Developer Tools</x-context-menu.item>
            </x-context-menu.sub-content>
        </x-context-menu.sub>
        <x-context-menu.separator />
        <x-context-menu.checkbox-item checked>
            Show Bookmarks Bar
            <x-context-menu.shortcut>⌘⇧B</x-context-menu.shortcut>
        </x-context-menu.checkbox-item>
        <x-context-menu.checkbox-item>Show Full URLs</x-context-menu.checkbox-item>
        <x-context-menu.separator />
        <x-context-menu.radio-group value="pedro" name="test">
            <x-context-menu.label inset>People</x-context-menu.label>
            <x-context-menu.separator />
            <x-context-menu.radio-item name="people" value="pedro">
                Pedro Duarte
            </x-context-menu.radio-item>
            <x-context-menu.radio-item name="people" value="colm">Colm Tuite</x-context-menu.radio-item>
        </x-context-menu.radio-group>
    </x-context-menu.content>
</x-context-menu>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish context-menu
```
