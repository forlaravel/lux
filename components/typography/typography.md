# Typography
A component to manage and style text elements in your application, making your content visually appealing and readable with various stylings.

## Example
```html
<x-typography variant="h1">
    Welcome to Our Website
</x-typography>

<x-typography variant="body">
    Enjoy a seamless and delightful experience as you navigate through our platform. Stay informed with our latest updates and insights.
</x-typography>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish typography
```

## Properties

### typography
| Prop      | Description                                    | Type     | Default   |
|-----------|------------------------------------------------|----------|-----------|
| `variant` | Determines the typography style, can be `h1`, `h2`, `h3`, `body`, `caption`, etc. | `string` | `body`    |