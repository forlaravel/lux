# Menubar
A horizontal menu bar with dropdown menus, commonly used for application menus.

## Example
```html
<x-menubar>
    <x-menubar.menu>
        <x-menubar.trigger>File</x-menubar.trigger>
        <x-menubar.content>
            <x-menubar.item>
                New Tab <x-menubar.shortcut>⌘T</x-menubar.shortcut>
            </x-menubar.item>
            <x-menubar.item>
                New Window <x-menubar.shortcut>⌘N</x-menubar.shortcut>
            </x-menubar.item>
            <x-menubar.separator />
            <x-menubar.item>
                Print <x-menubar.shortcut>⌘P</x-menubar.shortcut>
            </x-menubar.item>
        </x-menubar.content>
    </x-menubar.menu>
    <x-menubar.menu>
        <x-menubar.trigger>Edit</x-menubar.trigger>
        <x-menubar.content>
            <x-menubar.item>
                Undo <x-menubar.shortcut>⌘Z</x-menubar.shortcut>
            </x-menubar.item>
            <x-menubar.item>
                Redo <x-menubar.shortcut>⇧⌘Z</x-menubar.shortcut>
            </x-menubar.item>
            <x-menubar.separator />
            <x-menubar.item>
                Cut <x-menubar.shortcut>⌘X</x-menubar.shortcut>
            </x-menubar.item>
            <x-menubar.item>
                Copy <x-menubar.shortcut>⌘C</x-menubar.shortcut>
            </x-menubar.item>
            <x-menubar.item>
                Paste <x-menubar.shortcut>⌘V</x-menubar.shortcut>
            </x-menubar.item>
        </x-menubar.content>
    </x-menubar.menu>
    <x-menubar.menu>
        <x-menubar.trigger>View</x-menubar.trigger>
        <x-menubar.content>
            <x-menubar.item>Zoom In</x-menubar.item>
            <x-menubar.item>Zoom Out</x-menubar.item>
        </x-menubar.content>
    </x-menubar.menu>
</x-menubar>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish menubar
```

## Properties

### menubar
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |

### menubar.menu
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |
| `value` | Unique menu identifier | `string\|null` | `null` |

### menubar.trigger
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `button` |

### menubar.content
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |
| `teleport` | Teleport to a target element to avoid overflow clipping | `string\|boolean` | `false` |

### menubar.item
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `button` |
| `disabled` | Whether the item is disabled | `boolean` | `false` |

### menubar.separator
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |

### menubar.label
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |

### menubar.shortcut
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `span` |
