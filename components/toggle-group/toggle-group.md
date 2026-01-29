# Toggle Group
A group of toggle buttons for selecting one or multiple options.

## Example
### Single Selection
```html
<x-toggle-group type="single" value="center">
    <x-toggle-group.item value="left">
        <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="21" x2="3" y1="6" y2="6"/><line x1="15" x2="3" y1="12" y2="12"/><line x1="17" x2="3" y1="18" y2="18"/></svg>
    </x-toggle-group.item>
    <x-toggle-group.item value="center">
        <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="21" x2="3" y1="6" y2="6"/><line x1="18" x2="6" y1="12" y2="12"/><line x1="21" x2="3" y1="18" y2="18"/></svg>
    </x-toggle-group.item>
    <x-toggle-group.item value="right">
        <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="21" x2="3" y1="6" y2="6"/><line x1="21" x2="9" y1="12" y2="12"/><line x1="21" x2="7" y1="18" y2="18"/></svg>
    </x-toggle-group.item>
</x-toggle-group>
```

## Example
### Outline Variant
```html
<x-toggle-group type="single" variant="outline">
    <x-toggle-group.item value="left">Left</x-toggle-group.item>
    <x-toggle-group.item value="center">Center</x-toggle-group.item>
    <x-toggle-group.item value="right">Right</x-toggle-group.item>
</x-toggle-group>
```

## Example
### Multiple Selection
```html
<x-toggle-group type="multiple">
    <x-toggle-group.item value="bold">B</x-toggle-group.item>
    <x-toggle-group.item value="italic">I</x-toggle-group.item>
    <x-toggle-group.item value="underline">U</x-toggle-group.item>
</x-toggle-group>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish toggle-group
```

## Properties

### toggle-group
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |
| `type` | Selection type | `string` | `single` |
| `value` | Selected value(s) | `string\|array\|null` | `null` |
| `variant` | Visual variant for items | `string` | `default` |
| `size` | Size for items | `string` | `md` |

### toggle-group.item
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `button` |
| `value` | Value of this toggle | `string` | *required* |
