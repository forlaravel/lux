# Switch
A toggle switch control for boolean values.

## Example
```html
<x-switch />
```

## Example
### Checked by Default
```html
<x-switch checked />
```

## Example
### With Label
```html
<div class="flex items-center gap-2">
    <x-switch id="airplane" />
    <x-label for="airplane">Airplane Mode</x-label>
</div>
```

## Example
### Sizes
```html
<div class="flex items-center gap-4">
    <x-switch size="sm" />
    <x-switch size="md" />
    <x-switch size="lg" />
</div>
```

## Example
### Form Submission
```html
<x-switch name="notifications" checked />
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish switch
```

## Properties

### switch
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `button` |
| `checked` | Whether the switch is on | `boolean` | `false` |
| `name` | Form input name | `string\|null` | `null` |
| `size` | Size of the switch | `string` | `md` |
