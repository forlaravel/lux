# Radio Group
A set of radio buttons for selecting a single option from a list.

## Example
```html
<x-radio-group value="default">
    <div class="flex items-center gap-2">
        <x-radio-group.item value="default" id="r1" />
        <x-label for="r1">Default</x-label>
    </div>
    <div class="flex items-center gap-2">
        <x-radio-group.item value="comfortable" id="r2" />
        <x-label for="r2">Comfortable</x-label>
    </div>
    <div class="flex items-center gap-2">
        <x-radio-group.item value="compact" id="r3" />
        <x-label for="r3">Compact</x-label>
    </div>
</x-radio-group>
```

## Example
### Form Submission
```html
<x-radio-group name="plan" value="pro">
    <div class="flex items-center gap-2">
        <x-radio-group.item value="free" id="plan-free" />
        <x-label for="plan-free">Free</x-label>
    </div>
    <div class="flex items-center gap-2">
        <x-radio-group.item value="pro" id="plan-pro" />
        <x-label for="plan-pro">Pro</x-label>
    </div>
</x-radio-group>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish radio-group
```

## Properties

### radio-group
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |
| `value` | Currently selected value | `string\|null` | `null` |
| `name` | Form input name | `string\|null` | `null` |

### radio-group.item
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `button` |
| `value` | Value of this radio option | `string` | *required* |
| `id` | Element ID | `string\|null` | `null` |
| `disabled` | Whether the option is disabled | `boolean` | `false` |
