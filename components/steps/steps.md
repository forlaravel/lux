# Steps
A component used to display a series of steps or instructions in a visual hierarchy.

## Example
```html
<x-steps>
    <x-steps.item step="1" title="Step One">
        This is the description for step one.
    </x-steps.item>
    <x-steps.item step="2" title="Step Two">
        This is the description for step two.
    </x-steps.item>
</x-steps>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish steps
```

## Properties

### steps
No configurable properties.

### steps.item
| Prop        | Description                          | Type     | Default |
|-------------|--------------------------------------|----------|---------|
| `step`      | The step number or identifier        | `string` | N/A     |
| `title`     | Title for the step                   | `string` | N/A     |

## Accessibility

- Consider adding `aria-current="step"` to the active step item to indicate which step the user is on.
- If steps represent a sequential process, consider wrapping the component with `role="list"` and each item with `role="listitem"` (or use `tag="ol"` / `tag="li"`) so screen readers announce the step count and order.

