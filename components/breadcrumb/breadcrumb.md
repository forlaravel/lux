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

1. Run the following command:

```bash
php artisan lux:publish breadcrumb
```

## Properties
This component and its sub-components do not define custom blade properties. Use standard HTML attributes via the component tag.