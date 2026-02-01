# Skeleton
A placeholder animation to show while content is loading.

## Example
```html
<x-skeleton class="h-4 w-[250px]" />
```

## Example
### Card Skeleton
```html
<div class="flex items-center space-x-4">
    <x-skeleton class="h-12 w-12 rounded-full" />
    <div class="space-y-2">
        <x-skeleton class="h-4 w-[250px]" />
        <x-skeleton class="h-4 w-[200px]" />
    </div>
</div>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish skeleton
```

## Properties

### skeleton
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |

## Accessibility

- Skeletons are visual placeholders and convey no meaning to screen readers by default. Add `aria-hidden="true"` to skeleton elements and provide a separate screen-reader-only loading indicator, e.g.: `<span class="sr-only">Loading...</span>`.
- Alternatively, wrap the skeleton group in a container with `role="status"` and `aria-label="Loading"` so assistive technology announces the loading state.
