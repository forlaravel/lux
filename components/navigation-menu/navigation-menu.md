# Navigation Menu
A navigation menu with hover-triggered content panels for site navigation.

## Example
```html
<x-navigation-menu>
    <x-navigation-menu.list>
        <x-navigation-menu.item>
            <x-navigation-menu.trigger>Getting Started</x-navigation-menu.trigger>
            <x-navigation-menu.content class="w-[400px]">
                <ul class="grid gap-3 p-4 md:grid-cols-2">
                    <li>
                        <x-navigation-menu.link href="#">
                            <div class="text-sm font-medium">Introduction</div>
                            <p class="text-sm text-muted-foreground">Re-usable components built with Blade and Tailwind CSS.</p>
                        </x-navigation-menu.link>
                    </li>
                    <li>
                        <x-navigation-menu.link href="#">
                            <div class="text-sm font-medium">Installation</div>
                            <p class="text-sm text-muted-foreground">How to install and configure Lux.</p>
                        </x-navigation-menu.link>
                    </li>
                </ul>
            </x-navigation-menu.content>
        </x-navigation-menu.item>
        <x-navigation-menu.item>
            <x-navigation-menu.trigger>Components</x-navigation-menu.trigger>
            <x-navigation-menu.content class="w-[400px]">
                <ul class="grid gap-3 p-4 md:grid-cols-2">
                    <li>
                        <x-navigation-menu.link href="#">
                            <div class="text-sm font-medium">Button</div>
                            <p class="text-sm text-muted-foreground">Displays a button or link.</p>
                        </x-navigation-menu.link>
                    </li>
                    <li>
                        <x-navigation-menu.link href="#">
                            <div class="text-sm font-medium">Dialog</div>
                            <p class="text-sm text-muted-foreground">A modal dialog window.</p>
                        </x-navigation-menu.link>
                    </li>
                </ul>
            </x-navigation-menu.content>
        </x-navigation-menu.item>
        <x-navigation-menu.item>
            <x-navigation-menu.link href="#">Documentation</x-navigation-menu.link>
        </x-navigation-menu.item>
    </x-navigation-menu.list>
</x-navigation-menu>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish navigation-menu
```

## Properties

### navigation-menu
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `nav` |

### navigation-menu.list
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `ul` |

### navigation-menu.item
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `li` |
| `value` | Unique item identifier | `string\|null` | `null` |

### navigation-menu.trigger
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `button` |

### navigation-menu.content
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |
| `teleport` | Teleport to a target element to avoid overflow clipping | `string\|boolean` | `false` |

### navigation-menu.link
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `a` |

## Accessibility

- Provide an `aria-label` on `<x-navigation-menu>` to identify the navigation landmark (e.g., `aria-label="Main navigation"`). This is especially important when the page has multiple `<nav>` elements.
- Keyboard navigation is built in: arrow keys move between triggers and links, Escape closes open panels.
