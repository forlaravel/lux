# Textarea
A component used to create a customizable textarea input field with various styling options.

## Example
```html
<x-textarea type="text">
    Your content here...
</x-textarea>
```

## Example
### Auto-grow
The textarea automatically grows and shrinks as you type.
```html
<x-textarea :autogrow="true" placeholder="Start typing..."></x-textarea>
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
| `autogrow`| Whether the textarea automatically grows with content. | `boolean` | `false`   |