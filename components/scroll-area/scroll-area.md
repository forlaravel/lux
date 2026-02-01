# Scroll Area
A scrollable area with custom styled scrollbars.

## Example
```html
<x-scroll-area class="h-72 w-48 rounded-md border">
    <x-scroll-area.viewport class="p-4">
        <h4 class="mb-4 text-sm font-medium leading-none">Tags</h4>
        @foreach(range(1, 50) as $tag)
            <div class="text-sm">v1.0.0-beta.{{ $tag }}</div>
            <x-separator class="my-2" />
        @endforeach
    </x-scroll-area.viewport>
    <x-scroll-area.scrollbar />
</x-scroll-area>
```

## Example
### Horizontal
```html
<x-scroll-area orientation="horizontal" class="w-96 whitespace-nowrap rounded-md border">
    <x-scroll-area.viewport class="flex w-max space-x-4 p-4">
        @foreach(range(1, 20) as $i)
            <div class="w-[150px] shrink-0 rounded-md border p-4">
                <span class="text-sm font-medium">Item {{ $i }}</span>
            </div>
        @endforeach
    </x-scroll-area.viewport>
    <x-scroll-area.scrollbar />
</x-scroll-area>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish scroll-area
```

## Properties

### scroll-area
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |
| `orientation` | Scroll direction | `string` | `vertical` |

### scroll-area.viewport
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |

### scroll-area.scrollbar
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |

## Accessibility

- The viewport is keyboard-focusable by default (`tabindex="0"`), allowing keyboard scrolling.
- If the scroll area contains a distinct content region (e.g., a list of tags or a gallery), add an `aria-label` to the viewport to describe its contents: `<x-scroll-area.viewport aria-label="Tag list">`.
- The custom scrollbar is decorative and hidden from screen readers automatically.
