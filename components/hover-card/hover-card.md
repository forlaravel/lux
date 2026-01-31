# Hover Card
A card that appears on hover with a delay, useful for showing preview content.

## Example
```html
<x-hover-card>
    <x-hover-card.trigger>
        <a href="#" class="underline underline-offset-4">@nextjs</a>
    </x-hover-card.trigger>
    <x-hover-card.content>
        <div class="flex justify-between space-x-4">
            <div class="space-y-1">
                <h4 class="text-sm font-semibold">@nextjs</h4>
                <p class="text-sm text-muted-foreground">The React Framework – created and maintained by @vercel.</p>
                <div class="flex items-center pt-2">
                    <span class="text-xs text-muted-foreground">Joined December 2021</span>
                </div>
            </div>
        </div>
    </x-hover-card.content>
</x-hover-card>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish hover-card
```

## Properties

### hover-card
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |
| `openDelay` | Delay in ms before opening | `number` | `200` |
| `closeDelay` | Delay in ms before closing | `number` | `150` |

### hover-card.trigger
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |

### hover-card.content
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |
| `teleport` | Teleport to a target element to avoid overflow clipping | `string\|boolean` | `false` |
