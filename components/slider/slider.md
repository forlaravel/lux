# Slider
A range slider input for selecting a numeric value.

## Example
```html
<x-slider value="50" />
```

## Example
### Custom Range
```html
<x-slider value="25" min="0" max="50" step="5" />
```

## Example
### With Label
```html
<div class="space-y-2">
    <x-label>Volume</x-label>
    <x-slider value="75" />
</div>
```

## Example
### Form Submission
```html
<x-slider name="brightness" value="50" />
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish slider
```

## Properties

### slider
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |
| `value` | Current value | `number` | `0` |
| `min` | Minimum value | `number` | `0` |
| `max` | Maximum value | `number` | `100` |
| `step` | Step increment | `number` | `1` |
| `name` | Form input name | `string\|null` | `null` |
| `disabled` | Whether slider is disabled | `boolean` | `false` |
| `wire:model` | Bind slider value to a Livewire property (takes precedence over `value`). | `number` | `null` |

## Livewire

Use `wire:model` to bind the slider value to a Livewire property:

```html
<x-slider wire:model="brightness" />
```

Use the `.live` modifier to sync the value on every change:

```html
<x-slider wire:model.live="brightness" />
```

## Accessibility

- You **must** provide an accessible name for the slider via the `label` prop: `<x-slider label="Volume" value="50" />`. Without it, screen readers cannot identify the slider's purpose.
- Keyboard navigation is built-in: arrow keys adjust the value by `step`.
