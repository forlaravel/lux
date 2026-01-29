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
