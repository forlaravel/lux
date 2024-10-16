# Checkbox
A component used to display a checkbox which can be toggled on and off, with support for `wire:model` and customizable properties such as `id` and `checked`.

## Example
```html
<div class="flex gap-2">
    <x-checkbox id="checkbox" />
    <x-label for="checkbox">Some checkbox</x-label>
</div>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish checkbox
```

## Properties

### x-checkbox
| Prop      | Description                                      | Type      | Default |
|-----------|--------------------------------------------------|-----------|---------|
| `id`      | The id attribute for the checkbox button element | `string`  | `null`  |
| `checked` | Determines whether the checkbox is checked       | `boolean` | `false` |