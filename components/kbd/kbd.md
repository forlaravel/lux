# Kbd
Displays a keyboard key or shortcut.

## Example
```html
<x-kbd>⌘</x-kbd>
```

## Example
### Keyboard Shortcut
```html
<div class="flex items-center gap-1">
    <x-kbd>⌘</x-kbd>
    <x-kbd>K</x-kbd>
</div>
```

## Example
### With Text
```html
<p class="text-sm text-muted-foreground">
    Press <x-kbd>⌘</x-kbd> + <x-kbd>K</x-kbd> to open the command menu.
</p>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish kbd
```

## Properties

### kbd
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `kbd` |
