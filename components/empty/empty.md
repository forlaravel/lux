# Empty
An empty state placeholder with icon, title, and description.

## Example
```html
<x-empty>
    <x-empty.header>
        <x-empty.media>
            <svg xmlns="http://www.w3.org/2000/svg" class="size-10 text-muted-foreground" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
            </svg>
        </x-empty.media>
        <x-empty.title>No items found</x-empty.title>
        <x-empty.description>Get started by creating a new item.</x-empty.description>
    </x-empty.header>
    <x-empty.content>
        <x-button>Create Item</x-button>
    </x-empty.content>
</x-empty>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish empty
```

## Properties

### empty
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |

### empty.header
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |

### empty.media
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |

### empty.title
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `h3` |

### empty.description
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `p` |

### empty.content
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |
