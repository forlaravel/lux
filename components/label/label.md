# Label
A component used to display labels for form elements, with support for custom classes and `for` attribute.

## Example
```html
<x-label for="email">Email Address</x-label>
<x-input id="email" type="email" placeholder="Enter your email address" class="mt-2" />
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish label
```

## Properties

### label
| Prop      | Description                            | Type     | Default |
|-----------|----------------------------------------|----------|---------|
| `tag`     | The HTML tag to render                 | `string` | `label` |
| `for`     | The for attribute linking to a form element | `string` | `null`  |