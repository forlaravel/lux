# Code Block
A component designed to display syntax-highlighted code blocks with copy-to-clipboard functionality.

## Example
```html
<x-code-block language="php">
    <div>
        <h1>Hello, World!</h1>
    </div>
</x-code-block>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish code-block
```

## Properties

### code-block
| Prop                   | Description                                      | Type      | Default |
|------------------------|--------------------------------------------------|-----------|---------|
| `language`             | Specifies the language for syntax highlighting.  | `string`  | `''`    |
| `normalizeIndentation` | Normalizes the indentation of the code block.    | `boolean` | `true`  |