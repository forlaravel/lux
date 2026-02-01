# Checkbox
A toggle control for boolean values, with form and Livewire support.

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
| `checked` | Whether the checkbox is initially checked        | `boolean` | `false` |
| `wire:model` | Model selected item to Livewire (takes precedence over `checked`). | `string` | `null` |
| `name`    | The name attribute (on form submission) | `string`  | `null`  |
| `value`   | The value attribute for form submission  | `string`  | `null`  |

## Livewire

Use `wire:model` to bind the checked state to a Livewire property:

```html
<x-checkbox wire:model="acceptTerms" id="terms" />
<x-label for="terms">Accept terms and conditions</x-label>
```

## Accessibility

- Always provide a visible `<label>` associated with the checkbox using matching `id`/`for` attributes (e.g., `<x-checkbox id="terms" /> <x-label for="terms">Accept terms</x-label>`).
- If a visible label is not possible, add an `aria-label` directly to the checkbox component.
