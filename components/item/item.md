# Item
A generic list item component with media, content, title, description, and actions.

## Example
```html
<x-item>
    <x-item.media>
        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"/><polyline points="14 2 14 8 20 8"/></svg>
    </x-item.media>
    <x-item.content>
        <x-item.title>Document.pdf</x-item.title>
        <x-item.description>Uploaded on Jan 15, 2024</x-item.description>
    </x-item.content>
    <x-item.actions>
        <x-button variant="ghost" size="icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="1"/><circle cx="19" cy="12" r="1"/><circle cx="5" cy="12" r="1"/></svg>
        </x-button>
    </x-item.actions>
</x-item>
```

## Example
### Outline Variant
```html
<x-item variant="outline">
    <x-item.content>
        <x-item.title>Settings</x-item.title>
        <x-item.description>Manage your account settings.</x-item.description>
    </x-item.content>
</x-item>
```

## Example
### Item Group
```html
<x-item.group>
    <x-item>
        <x-item.content>
            <x-item.title>Item 1</x-item.title>
        </x-item.content>
    </x-item>
    <x-item.separator />
    <x-item>
        <x-item.content>
            <x-item.title>Item 2</x-item.title>
        </x-item.content>
    </x-item>
</x-item.group>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish item
```

## Properties

### item
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |
| `variant` | Visual variant | `string` | `default` |
| `size` | Item size | `string` | `default` |

### item.media
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |

### item.content
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |

### item.title
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |

### item.description
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `p` |

### item.actions
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |

### item.header
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |

### item.footer
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |

### item.group
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |

### item.separator
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |

## Accessibility

- Icon-only buttons in `<x-item.actions>` must have an accessible label (e.g., `aria-label="More options"`).
- Decorative SVGs in `<x-item.media>` should include `aria-hidden="true"`. If the icon conveys meaning, provide an `aria-label` on the SVG instead.
- When rendering a list of items, consider wrapping them in a `<ul>` with `<li>` tags (using the `tag` prop) to provide proper list semantics.
