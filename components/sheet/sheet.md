# Sheet
A panel that slides in from the edge of the screen. Extends the dialog pattern.

## Example
```html
<x-sheet>
    <x-sheet.trigger>
        <x-button variant="outline">Open Sheet</x-button>
    </x-sheet.trigger>
    <x-sheet.content>
        <x-sheet.header>
            <x-sheet.title>Edit Profile</x-sheet.title>
            <x-sheet.description>Make changes to your profile here.</x-sheet.description>
        </x-sheet.header>
        <div class="p-6">
            <p>Sheet content goes here.</p>
        </div>
        <x-sheet.footer>
            <x-button type="submit">Save changes</x-button>
        </x-sheet.footer>
    </x-sheet.content>
</x-sheet>
```

## Example
### Left Side
```html
<x-sheet>
    <x-sheet.trigger>
        <x-button variant="outline">Open Left</x-button>
    </x-sheet.trigger>
    <x-sheet.content side="left">
        <x-sheet.header>
            <x-sheet.title>Navigation</x-sheet.title>
        </x-sheet.header>
        <div class="p-6">
            <p>Navigation links here.</p>
        </div>
    </x-sheet.content>
</x-sheet>
```

## Example
### Bottom Sheet
```html
<x-sheet>
    <x-sheet.trigger>
        <x-button variant="outline">Open Bottom</x-button>
    </x-sheet.trigger>
    <x-sheet.content side="bottom">
        <x-sheet.header>
            <x-sheet.title>Actions</x-sheet.title>
        </x-sheet.header>
        <div class="p-6">
            <p>Content here.</p>
        </div>
    </x-sheet.content>
</x-sheet>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish sheet
```

## Properties

### sheet
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |
| `open` | Whether the sheet is open | `boolean` | `false` |

### sheet.trigger
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |

### sheet.content
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `dialog` |
| `side` | Side to slide from | `string` | `right` |
| `showCloseButton` | Show close button | `boolean` | `true` |

### sheet.header
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |

### sheet.title
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `h2` |

### sheet.description
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `p` |

### sheet.footer
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |

### sheet.close
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `button` |
