# Input Group
An input wrapper with prefix and suffix addon slots.

## Example
```html
<x-input-group>
    <x-input-group.prefix>
        <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
    </x-input-group.prefix>
    <x-input placeholder="Search..." />
</x-input-group>
```

## Example
### With Suffix
```html
<x-input-group>
    <x-input placeholder="0.00" />
    <x-input-group.suffix>USD</x-input-group.suffix>
</x-input-group>
```

## Example
### With Both
```html
<x-input-group>
    <x-input-group.prefix>$</x-input-group.prefix>
    <x-input placeholder="0.00" />
    <x-input-group.suffix>.00</x-input-group.suffix>
</x-input-group>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish input-group
```

## Properties

### input-group
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |

### input-group.prefix
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |

### input-group.suffix
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |

## Accessibility

- Ensure the `<x-input>` inside the group has an associated `<x-label>` (via matching `for`/`id` attributes) or an `aria-label`.
- Decorative icons placed in `<x-input-group.prefix>` or `<x-input-group.suffix>` should include `aria-hidden="true"` so screen readers ignore them.
