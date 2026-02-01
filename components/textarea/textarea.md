# Textarea
A component used to create a customizable textarea input field with various styling options.

## Example
```html
<x-textarea type="text">
    Your content here...
</x-textarea>
```

## Example
### Sizes
```html
<div class="grid w-full max-w-sm gap-2">
    <x-textarea size="sm" placeholder="Size sm"></x-textarea>
    <x-textarea size="md" placeholder="Size md"></x-textarea>
    <x-textarea size="lg" placeholder="Size lg"></x-textarea>
    <x-textarea size="xl" placeholder="Size xl"></x-textarea>
</div>
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
| `size`    | Specifies the size of the textarea, can be `sm`, `md`, `lg`, `xl` | `string` | `md` |

## Livewire

Use `wire:model` to bind the textarea value to a Livewire property:

```html
<x-textarea wire:model="message" placeholder="Type your message..." />
```

## Accessibility

- Always associate a visible `<label>` with the textarea using matching `id`/`for` attributes, or provide an `aria-label` attribute directly on the component.
- If the textarea has validation requirements, use `aria-describedby` to link it to any helper or error message text.