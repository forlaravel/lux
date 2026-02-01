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
| `wire:model` | Bind checked state to a Livewire property (takes precedence over `checked`). | `boolean` | `null` |

## Livewire

Use `wire:model` to bind the switch state to a Livewire property:

```html
<x-switch wire:model="notifications" />
```

Use the `.live` modifier to sync the state on every change:

```html
<x-switch wire:model.live="notifications" />
```

## Accessibility

- Always provide an accessible label. Either pair the switch with a `<label>` element using matching `id`/`for` attributes, or add an `aria-label` attribute directly to the switch (e.g., `<x-switch aria-label="Enable notifications" />`).
