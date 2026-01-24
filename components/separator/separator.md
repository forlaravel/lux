# Separator
A versatile component used to separate sections of content, with options for horizontal or vertical orientation.

## Example
```html
<div>
    <div class="space-y-1">
        <h4 class="text-sm font-medium leading-none">Divide and conquer</h4>
        <p class="text-sm text-muted-foreground">Separate sections of content with ease.</p>
    </div>

    <x-separator orientation="horizontal"></x-separator>

    <div class="flex h-5 items-center space-x-4 text-sm">
        <div>Blog</div>
        <x-separator orientation="vertical"></x-separator>
        <div>Docs</div>
        <x-separator orientation="vertical"></x-separator>
        <div>Source</div>
    </div>
</div>
```


## Installation
1. Run the following command:

```bash
php artisan lux:publish separator
```

## Properties

### separator
| Prop         | Description                                                         | Type     | Default       |
|--------------|---------------------------------------------------------------------|----------|---------------|
| `orientation`| Determines the orientation of the separator, can be either `horizontal` or `vertical`  | `string` | `horizontal`  |
| `tag`        | The HTML tag to render                                              | `string` | `div`         |
