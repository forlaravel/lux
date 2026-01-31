# Tooltip
A popup that displays information on hover or focus.

## Example
```html
<x-tooltip>
    <x-tooltip.trigger>
        <x-button variant="outline">Hover Me</x-button>
    </x-tooltip.trigger>
    <x-tooltip.content>
        <p>This is a tooltip</p>
    </x-tooltip.content>
</x-tooltip>
```

## Example
### With Icon Button
```html
<x-tooltip>
    <x-tooltip.trigger>
        <x-button variant="ghost" size="icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
        </x-button>
    </x-tooltip.trigger>
    <x-tooltip.content>
        <p>More information</p>
    </x-tooltip.content>
</x-tooltip>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish tooltip
```

## Properties

### tooltip
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |
| `placement` | Tooltip position | `string` | `top` |

### tooltip.trigger
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |

### tooltip.content
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |
| `teleport` | Teleport to a target element to avoid overflow clipping | `string\|boolean` | `false` |
