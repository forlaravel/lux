# Toggle
A two-state toggle button.

## Example
```html
<x-toggle>
    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M366 18h-8"/><path d="M2 12h20"/><path d="M6 6h12"/></svg>
</x-toggle>
```

## Example
### Outline Variant
```html
<x-toggle variant="outline">
    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 18h-8"/><path d="M2 12h20"/><path d="M6 6h12"/></svg>
</x-toggle>
```

## Example
### With Text
```html
<x-toggle>
    <svg xmlns="http://www.w3.org/2000/svg" class="size-4 mr-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 4h2"/><path d="M5 4h14"/><path d="M21 4h2"/></svg>
    Bold
</x-toggle>
```

## Example
### Sizes
```html
<x-toggle size="sm">S</x-toggle>
<x-toggle size="md">M</x-toggle>
<x-toggle size="lg">L</x-toggle>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish toggle
```

## Properties

### toggle
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `button` |
| `variant` | Visual variant | `string` | `default` |
| `size` | Size of the toggle | `string` | `md` |
| `pressed` | Whether toggle is pressed | `boolean` | `false` |
