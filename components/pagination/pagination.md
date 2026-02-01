# Pagination
Page navigation with previous, next, and numbered page links.

## Example
```html
<x-pagination>
    <x-pagination.content>
        <x-pagination.item>
            <x-pagination.previous href="#" />
        </x-pagination.item>
        <x-pagination.item>
            <x-pagination.link href="#">1</x-pagination.link>
        </x-pagination.item>
        <x-pagination.item>
            <x-pagination.link href="#" active>2</x-pagination.link>
        </x-pagination.item>
        <x-pagination.item>
            <x-pagination.link href="#">3</x-pagination.link>
        </x-pagination.item>
        <x-pagination.item>
            <x-pagination.ellipsis />
        </x-pagination.item>
        <x-pagination.item>
            <x-pagination.next href="#" />
        </x-pagination.item>
    </x-pagination.content>
</x-pagination>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish pagination
```

## Properties

### pagination
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `nav` |

### pagination.content
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `ul` |

### pagination.item
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `li` |

### pagination.link
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `a` |
| `active` | Whether the link is active | `boolean` | `false` |

### pagination.previous
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `a` |

### pagination.next
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `a` |

### pagination.ellipsis
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `span` |

## Accessibility

- Add `aria-current="page"` to the active `<x-pagination.link>` so screen readers announce the current page (e.g., `<x-pagination.link href="#" active aria-current="page">2</x-pagination.link>`).
