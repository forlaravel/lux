# Drawer
A bottom (or side) drawer panel with optional drag handle.

## Example
```html
<x-drawer>
    <x-drawer.trigger>
        <x-button variant="outline">Open Drawer</x-button>
    </x-drawer.trigger>
    <x-drawer.content>
        <x-drawer.header>
            <x-drawer.title>Move Goal</x-drawer.title>
            <x-drawer.description>Set your daily activity goal.</x-drawer.description>
        </x-drawer.header>
        <div class="p-4">
            <p>Drawer content here.</p>
        </div>
        <x-drawer.footer>
            <x-button>Submit</x-button>
            <x-drawer.close>
                <x-button variant="outline" class="w-full">Cancel</x-button>
            </x-drawer.close>
        </x-drawer.footer>
    </x-drawer.content>
</x-drawer>
```

## Example
### Right Drawer
```html
<x-drawer direction="right">
    <x-drawer.trigger>
        <x-button variant="outline">Open Right</x-button>
    </x-drawer.trigger>
    <x-drawer.content>
        <x-drawer.header>
            <x-drawer.title>Settings</x-drawer.title>
        </x-drawer.header>
        <div class="p-4">
            <p>Settings content here.</p>
        </div>
    </x-drawer.content>
</x-drawer>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish drawer
```

## Properties

### drawer
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |
| `open` | Whether the drawer is open | `boolean` | `false` |
| `direction` | Direction to slide from | `string` | `bottom` |

### drawer.trigger
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |

### drawer.content
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |
| `showHandle` | Show drag handle | `boolean` | `true` |

### drawer.header
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |

### drawer.title
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `h2` |

### drawer.description
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `p` |

### drawer.footer
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |

### drawer.close
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `button` |
