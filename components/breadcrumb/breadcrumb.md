# Breadcrumb
A navigation component that helps users understand their location within a website's hierarchy.

## Example
```html
<x-breadcrumb>
    <x-breadcrumb.list>
        <x-breadcrumb.item>
            <x-breadcrumb.link href="/">Home</x-breadcrumb.link>
        </x-breadcrumb.item>
        <x-breadcrumb.separator />
        <x-breadcrumb.item>
            <x-breadcrumb.ellipsis class="h-4 w-4" />
        </x-breadcrumb.item>
        <x-breadcrumb.separator />
        <x-breadcrumb.item>
            <x-breadcrumb.link href="/docs/components">Components</x-breadcrumb.link>
        </x-breadcrumb.item>
        <x-breadcrumb.separator />
        <x-breadcrumb.item>
            <x-breadcrumb.page>Breadcrumb</x-breadcrumb.page>
        </x-breadcrumb.item>
    </x-breadcrumb.list>
</x-breadcrumb>
```

## Installation

1. Run the following command to publish the breadcrumb component:

```bash
php artisan lux:publish breadcrumb
```

2. Ensure your Tailwind CSS configuration supports utility classes for layout, typography, and icons.

## Properties

### x-breadcrumb
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `aria-label` | Describes the purpose of the breadcrumb navigation. | `string` | `"breadcrumb"` |

### x-breadcrumb.list
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `class` | Additional Tailwind CSS classes for styling the breadcrumb list. | `string` | `flex flex-wrap items-center gap-1.5 break-words text-sm text-muted-foreground sm:gap-2.5` |

### x-breadcrumb.item
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `class` | Additional Tailwind CSS classes for styling the breadcrumb item. | `string` | `inline-flex items-center gap-1.5` |

### x-breadcrumb.link
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `href` | URL to navigate when the breadcrumb link is clicked. | `string` | `null` |
| `class` | Additional Tailwind CSS classes for styling the breadcrumb link. | `string` | `transition-colors hover:text-foreground` |

### x-breadcrumb.page
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `aria-current` | Indicates the current page in the breadcrumb navigation. | `string` | `"page"` |
| `class` | Additional Tailwind CSS classes for styling the current page in the breadcrumb. | `string` | `font-normal text-foreground` |

### x-breadcrumb.separator
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `role` | Defines the separator's role in the breadcrumb navigation. | `string` | `"presentation"` |
| `aria-hidden` | Hides the separator from screen readers. | `boolean` | `true` |
| `class` | Additional Tailwind CSS classes for styling the separator. | `string` | `flex h-5 w-5 items-center justify-center` |

### x-breadcrumb.ellipsis
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `class` | Additional Tailwind CSS classes for styling the ellipsis icon. | `string` | `lucide lucide-ellipsis h-4 w-4` |