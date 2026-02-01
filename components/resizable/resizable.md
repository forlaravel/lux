# Resizable
A resizable panel layout with draggable handles.

## Example
```html
<x-resizable class="max-w-md rounded-lg border">
    <x-resizable.panel class="p-6">
        <span class="font-semibold">One</span>
    </x-resizable.panel>
    <x-resizable.handle withHandle />
    <x-resizable.panel class="p-6">
        <span class="font-semibold">Two</span>
    </x-resizable.panel>
</x-resizable>
```

## Example
### Vertical
```html
<x-resizable direction="vertical" class="max-w-md rounded-lg border" style="height: 200px;">
    <x-resizable.panel class="p-6">
        <span class="font-semibold">Top</span>
    </x-resizable.panel>
    <x-resizable.handle withHandle />
    <x-resizable.panel class="p-6">
        <span class="font-semibold">Bottom</span>
    </x-resizable.panel>
</x-resizable>
```

## Example
### Three Panels
```html
<x-resizable class="max-w-md rounded-lg border">
    <x-resizable.panel class="p-6">
        <span class="font-semibold">Left</span>
    </x-resizable.panel>
    <x-resizable.handle />
    <x-resizable.panel class="p-6">
        <span class="font-semibold">Center</span>
    </x-resizable.panel>
    <x-resizable.handle />
    <x-resizable.panel class="p-6">
        <span class="font-semibold">Right</span>
    </x-resizable.panel>
</x-resizable>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish resizable
```

## Properties

### resizable
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |
| `direction` | Layout direction | `string` | `horizontal` |

### resizable.panel
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |
| `defaultSize` | Initial panel size (%) | `number\|null` | `null` |
| `minSize` | Minimum panel size (px) | `number\|null` | `null` |

### resizable.handle
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |
| `withHandle` | Show drag handle icon | `boolean` | `false` |

## Accessibility

- Provide an `aria-label` on each `<x-resizable.handle>` to describe the panels it separates (e.g., `<x-resizable.handle aria-label="Resize sidebar and content" withHandle />`).
