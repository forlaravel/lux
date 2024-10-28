# Window
The `x-window` component is a simple window component that can be used to display content in a window.

## Example
```html
<x-window :show="true">
    <x-window.title>
        Drag me
    </x-window.title>
    <x-window.content>
        The content
    </x-window.content>
</x-window>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish window
```