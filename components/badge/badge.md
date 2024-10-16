# Badge
A small, adaptable component for displaying statuses, labels, or counts.

## Example
```html
<x-badge>Badge</x-badge>
<x-badge variant="secondary">Secondary</x-badge>
<x-badge variant="destructive">Destructive</x-badge>
<x-badge variant="outline">outline</x-badge>
```

## Installation

1. Run the following command to publish the badge component:

```bash
php artisan lux:publish badge
```


## Properties

### x-badge
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `variant` | Determines the styling of the badge. Can be one of `default`, `secondary`, `destructive`, `outline`. | `string` | `default` |
| `class` | Additional Tailwind CSS classes to customize the appearance of the badge. | `string` | `""` |