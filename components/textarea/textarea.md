# Textarea
A component used to create a customizable textarea input field with various styling options.

## Example
```html
<x-textarea type="text">
    Your content here...
</x-textarea>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish textarea
```



## Properties

### textarea
| Prop      | Description                            | Type     | Default   |
|-----------|----------------------------------------|----------|-----------|
| `tag`     | The HTML tag to render                 | `string` | `textarea` |
| `type`    | Determines the type of the textarea input. | `string` | `text`    |