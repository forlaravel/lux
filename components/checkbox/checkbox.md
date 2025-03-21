# Checkbox
A component used to display a checkbox which can be toggled on and off, with support for `wire:model` and customizable properties such as `id` and `checked`.

## Example
```html
<div class="flex gap-2.5 items-center">
    <x-checkbox id="checkbox" />
    <x-label for="checkbox">Accept terms and conditions</x-label>
</div>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish checkbox
```

## Properties

### checkbox
| Prop      | Description                                      | Type      | Default |
|-----------|--------------------------------------------------|-----------|---------|
| `id`      | The id attribute for the checkbox button element | `string`  | `null`  |
| `value`   | Determines whether the checkbox is checked       | `boolean` | `false` |
| `wire:model` | Model selected item to Livewire (takes precedence over `checked`). | `string` | `null` |
| `name`    | The name attribute (on form submission) | `string`  | `null`  |
| `value`   | The value attribute (on form submission) | `string`  | `null`  |
