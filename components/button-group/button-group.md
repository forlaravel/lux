# Button Group
Group buttons together with shared borders and rounded corners.

## Example
```html
<x-button-group>
    <x-button variant="outline">Left</x-button>
    <x-button variant="outline">Center</x-button>
    <x-button variant="outline">Right</x-button>
</x-button-group>
```

## Example
### Vertical
```html
<x-button-group orientation="vertical">
    <x-button variant="outline">Top</x-button>
    <x-button variant="outline">Middle</x-button>
    <x-button variant="outline">Bottom</x-button>
</x-button-group>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish button-group
```

## Properties

### button-group
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |
| `orientation` | Layout direction | `string` | `horizontal` |

## Accessibility

- Add `role="group"` and a descriptive `aria-label` to the button group when the grouped buttons represent a related set of actions (e.g., `<x-button-group role="group" aria-label="Text formatting">`).
