# Combobox
A searchable select component with filtering support.

## Example
```html
<x-combobox>
    <x-combobox.trigger />
    <x-combobox.content>
        <x-combobox.item value="next" label="Next.js">Next.js</x-combobox.item>
        <x-combobox.item value="svelte" label="SvelteKit">SvelteKit</x-combobox.item>
        <x-combobox.item value="nuxt" label="Nuxt.js">Nuxt.js</x-combobox.item>
        <x-combobox.item value="remix" label="Remix">Remix</x-combobox.item>
        <x-combobox.item value="astro" label="Astro">Astro</x-combobox.item>
    </x-combobox.content>
</x-combobox>
```

## Example
### With Pre-selected Value
```html
<x-combobox value="svelte" placeholder="Select framework...">
    <x-combobox.trigger />
    <x-combobox.content>
        <x-combobox.item value="next" label="Next.js">Next.js</x-combobox.item>
        <x-combobox.item value="svelte" label="SvelteKit">SvelteKit</x-combobox.item>
        <x-combobox.item value="nuxt" label="Nuxt.js">Nuxt.js</x-combobox.item>
    </x-combobox.content>
</x-combobox>
```

## Example
### Form Submission
```html
<x-combobox name="framework" placeholder="Select framework...">
    <x-combobox.trigger />
    <x-combobox.content>
        <x-combobox.item value="laravel" label="Laravel">Laravel</x-combobox.item>
        <x-combobox.item value="rails" label="Ruby on Rails">Ruby on Rails</x-combobox.item>
        <x-combobox.item value="django" label="Django">Django</x-combobox.item>
    </x-combobox.content>
</x-combobox>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish combobox
```

## Properties

### combobox
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |
| `value` | Selected value | `string\|null` | `null` |
| `name` | Form input name | `string\|null` | `null` |
| `placeholder` | Placeholder text | `string` | `Select an option` |
| `searchPlaceholder` | Search input placeholder | `string` | `Search...` |
| `wire:model` | Bind selected value to a Livewire property (takes precedence over `value`). | `string` | `null` |

### combobox.trigger
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `button` |

### combobox.content
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |

### combobox.item
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `button` |
| `value` | Item value | `string` | *required* |
| `label` | Display label for filtering | `string\|null` | slot content |
| `disabled` | Whether the item is disabled | `boolean` | `false` |

### combobox.separator
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |

### combobox.label
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |

## Livewire

Use `wire:model` to bind the selected value to a Livewire property:

```html
<x-combobox wire:model="framework" placeholder="Select framework...">
    <x-combobox.trigger />
    <x-combobox.content>
        <x-combobox.item value="laravel" label="Laravel">Laravel</x-combobox.item>
        <x-combobox.item value="rails" label="Ruby on Rails">Ruby on Rails</x-combobox.item>
    </x-combobox.content>
</x-combobox>
```

Use the `.live` modifier to sync the value on every change:

```html
<x-combobox wire:model.live="framework">
    ...
</x-combobox>
```
