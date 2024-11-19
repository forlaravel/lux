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
| Prop        | Description                          | Type     | Default |
|-------------|--------------------------------------|----------|---------|
| `class`     | Additional CSS classes for the steps container | `string` | `steps mb-12 ml-4 border-l` |

### steps.item
| Prop        | Description                          | Type     | Default |
|-------------|--------------------------------------|----------|---------|
| `step`      | The step number or identifier        | `string` | N/A     |
| `title`     | Title for the step                   | `string` | N/A     |
| `class`     | Additional CSS classes for the item container | `string` | `relative` |

