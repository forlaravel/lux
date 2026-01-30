# Progress
Displays an indicator showing the completion progress of a task.

## Example
```html
<x-progress value="33" />
```

## Example
### Different Values
```html
<div class="space-y-4">
    <x-progress value="0" />
    <x-progress value="25" />
    <x-progress value="50" />
    <x-progress value="75" />
    <x-progress value="100" />
</div>
```

## Example
### Custom Max
```html
<x-progress value="3" max="10" />
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish progress
```

## Properties

### progress
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |
| `value` | Current progress value | `number` | `0` |
| `max` | Maximum progress value | `number` | `100` |
