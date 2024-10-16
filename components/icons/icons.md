# Icons
A component used to display SVG icons, allowing for dynamic attributes and styling.

## Example
```html
<x-icons class="w-6 h-6 text-red-500"/>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish icons
```

## Properties

### x-icons
| Prop          | Description                                                                    | Type     | Default   |
|---------------|--------------------------------------------------------------------------------|----------|-----------|
| `class`       | Applies CSS classes to the SVG element for styling purposes.                   | `string` | `''`      |
| `stroke-width` | Determines the width of the stroke for the SVG paths.                         | `string` | `2`       |
| `stroke`      | Defines the color of the stroke for the SVG paths.                             | `string` | `currentColor` |
| `fill`        | Defines the fill color for the SVG paths.                                      | `string` | `none`    |