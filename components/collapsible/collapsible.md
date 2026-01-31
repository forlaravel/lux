# Collapsible
An expandable/collapsible section of content.

## Example
```html
<x-collapsible>
    <div class="flex items-center justify-between space-x-4 px-4">
        <h4 class="text-sm font-semibold">Starred repositories</h4>
        <x-collapsible.trigger>
            <x-button variant="ghost" size="icon">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m7 15 5 5 5-5"/><path d="m7 9 5-5 5 5"/></svg>
                <span class="sr-only">Toggle</span>
            </x-button>
        </x-collapsible.trigger>
    </div>
    <div class="rounded-md border px-4 py-2 font-mono text-sm shadow-xs">primitives</div>
    <x-collapsible.content>
        <div class="space-y-2 pt-2">
            <div class="rounded-md border px-4 py-2 font-mono text-sm shadow-xs">colors</div>
            <div class="rounded-md border px-4 py-2 font-mono text-sm shadow-xs">react</div>
        </div>
    </x-collapsible.content>
</x-collapsible>
```

## Example
Open by default:
```html
<x-collapsible open>
    <x-collapsible.trigger>
        <x-button variant="outline">Show Details</x-button>
    </x-collapsible.trigger>
    <x-collapsible.content>
        <p class="mt-2 text-sm text-muted-foreground">These are the details that were hidden.</p>
    </x-collapsible.content>
</x-collapsible>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish collapsible
```

## Properties

### collapsible
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |
| `open` | Whether the content is expanded | `boolean` | `false` |

### collapsible.trigger
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |

### collapsible.content
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |
