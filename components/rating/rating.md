# Rating

A star rating component with hover preview, click to select, and keyboard support. Supports Livewire binding via `wire:model`.

## Example
```html
<x-rating />
```

## Example
With a default value of 3 stars:
```html
<x-rating :value="3" />
```

## Example
Different sizes:
```html
<div class="flex flex-col gap-3">
    <x-rating :value="3" size="xs" />
    <x-rating :value="3" size="sm" />
    <x-rating :value="3" size="md" />
    <x-rating :value="3" size="lg" />
    <x-rating :value="3" size="xl" />
</div>
```

## Example
Custom max (10 stars) with a default value:
```html
<x-rating :value="7" :max="10" />
```

## Example
Readonly (display only, no interaction):
```html
<x-rating :value="4" readonly />
```

## Example
Disabled state:
```html
<x-rating :value="2" disabled />
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish rating
```

## Properties

### rating
| Prop       | Description                                              | Type      | Default |
|------------|----------------------------------------------------------|-----------|---------|
| `value`    | The current rating value.                                | `integer` | `0`     |
| `max`      | Maximum number of stars.                                 | `integer` | `5`     |
| `name`     | Hidden input name for form submission.                   | `string`  | `null`  |
| `disabled` | Disable interaction and dim the component.               | `boolean` | `false` |
| `readonly` | Display only, no hover effects or click interaction.     | `boolean` | `false` |
| `size`     | Size of the stars: `xs`, `sm`, `md`, `lg`, or `xl`.     | `string`  | `md`    |

### Features

- **Hover preview** — stars highlight on hover to preview the rating before clicking
- **Click to toggle** — click a star to set the rating, click again to reset to 0
- **Keyboard accessible** — full radio group role with aria attributes
- **Livewire compatible** — use `wire:model` to bind the rating value
- **Form support** — optional `name` prop adds a hidden input for form submission
- **Sizes** — five sizes: `xs`, `sm`, `md`, `lg`, `xl`

## Livewire

Use `wire:model` to bind the rating value to a Livewire property:

```html
<x-rating wire:model="rating" />
```

## Accessibility

- The component defaults to `aria-label="Rating"`. If your page has multiple rating components, override it with a specific label (e.g., `<x-rating aria-label="Food quality rating" />`).
