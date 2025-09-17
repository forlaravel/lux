# Popover
A component used to display a popover menu in your application. It includes a main content area that can be shown or hidden, and a trigger to control its visibility.

## Example

### Basic Usage
```html
<x-popover>
    <x-popover.trigger>
        <x-button variant="outline">Open popover</x-button>
    </x-popover.trigger>

    <x-popover.content>
        <div class="grid gap-4">
            <div class="space-y-2">
                <h4 class="font-medium leading-none">Dimensions</h4>
                <p class="text-sm text-muted-foreground">
                    Set the dimensions for the layer.
                </p>
            </div>
            <div class="grid gap-2">
                <div class="grid grid-cols-3 items-center gap-4">
                    <x-label for="width">Width</x-label>
                    <x-input id="width" value="100%" class="col-span-2 h-8" />
                </div>
                <div class="grid grid-cols-3 items-center gap-4">
                    <x-label for="maxWidth">Max. width</x-label>
                    <x-input id="maxWidth" value="300px" class="col-span-2 h-8" />
                </div>
                <div class="grid grid-cols-3 items-center gap-4">
                    <x-label for="height">Height</x-label>
                    <x-input id="height" value="25px" class="col-span-2 h-8" />
                </div>
                <div class="grid grid-cols-3 items-center gap-4">
                    <x-label for="maxHeight">Max. height</x-label>
                    <x-input id="maxHeight" value="none" class="col-span-2 h-8" />
                </div>
            </div>
        </div>
    </x-popover.content>
</x-popover>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish popover
```



## Properties

### popover
The main component that encapsulates the entire popover structure.

### popover.trigger
The component responsible for toggling the visibility of the popover content.

### popover.content
The component that holds the content of the popover menu. This part is shown or hidden based on the state controlled by the trigger.

No unique props are required for these sub-components as they rely on AlpineJS for functionality and TailwindCSS for styling.