# Spinner
A loading spinner animation indicator.

## Example
```html
<x-spinner />
```

## Example
### Sizes
```html
<x-spinner size="sm" />
<x-spinner size="md" />
<x-spinner size="lg" />
<x-spinner size="xl" />
```

## Example
### With Button
```html
<x-button disabled>
    <x-spinner size="sm" />
    Loading...
</x-button>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish spinner
```

## Properties

### spinner
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |
| `size` | Size of the spinner | `string` | `md` |
