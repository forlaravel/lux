# Date Picker
A date selection component that combines a popover with a calendar.

## Example
```html
<x-date-picker />
```

## Example
### With Placeholder
```html
<x-date-picker placeholder="Select a date" />
```

## Example
### Form Submission
```html
<x-date-picker name="start_date" />
```

## Example
### Pre-selected Date
```html
<x-date-picker value="2024-01-15" />
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish date-picker
```

> **Note:** This component depends on the `popover` and `calendar` components. Make sure they are published as well.

## Properties

### date-picker
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |
| `value` | Selected date value | `string\|null` | `null` |
| `format` | Date format | `string` | `Y-m-d` |
| `placeholder` | Placeholder text | `string` | `Pick a date` |
| `name` | Form input name | `string\|null` | `null` |
| `wire:model` | Bind the selected date to a Livewire property (takes precedence over `value`). | `string` | `null` |

## Livewire

Use `wire:model` to bind the selected date to a Livewire property:

```html
<x-date-picker wire:model="startDate" placeholder="Select start date" />
```

Use the `.live` modifier to sync the value on every change:

```html
<x-date-picker wire:model.live="startDate" />
```

## Accessibility

- Provide a visible `<label>` next to or above the date picker so users understand what date is being requested. The component does not render a label automatically.
- If you use multiple date pickers on one page, ensure each has a distinct label so screen readers can differentiate them.
