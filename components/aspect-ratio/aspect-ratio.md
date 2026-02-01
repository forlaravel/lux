# Aspect Ratio
A component used to maintain a consistent width-to-height ratio for its content.

## Example
```html
<x-aspect-ratio ratio="16/9" class="bg-accent rounded-lg items-center justify-center flex">
    <span class="text-xl">16/9</span>
</x-aspect-ratio>
<br>
<x-aspect-ratio ratio="4/3" class="bg-accent rounded-lg items-center justify-center flex">
    <span class="text-xl">4/3</span>
</x-aspect-ratio>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish aspect-ratio
```



## Properties

### aspect-ratio
| Prop    | Description                                             | Type     | Default |
|---------|---------------------------------------------------------|----------|---------|
| `ratio` | Determines the width-to-height ratio of the component   | `string` | `1/1`   |

## Accessibility

- Ensure any images placed inside the component have descriptive `alt` text.