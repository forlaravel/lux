# Combobox
A versatile and customizable combobox component that allows users to select an item from a list of options or search within the list.

## Example
```html
@php
    $frameworks = [['value' => 'next.js', 'label' => 'Next.js'], ['value' => 'sveltekit', 'label' => 'SvelteKit'], ['value' => 'nuxt.js', 'label' => 'Nuxt.js'], ['value' => 'remix', 'label' => 'Remix'], ['value' => 'astro', 'label' => 'Astro']];
@endphp

<x-combobox :items="$frameworks" placeholder="Select a framework..." noResultsText="No framework found." />
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish combobox
```



## Properties

### x-combobox
| Prop            | Description                                       | Type     | Default                |
|-----------------|---------------------------------------------------|----------|------------------------|
| `items`         | The list of items to show in the combobox.         | `array`  | `[]`                   |
| `placeholder`   | Placeholder text for the combobox input.           | `string` | `'Select an option...'`|
| `noResultsText` | Text to display when no items match the query.     | `string` | `'No results found.'`  |

### x-combobox.trigger
| Prop           | Description                                          | Type     | Default                |
|----------------|------------------------------------------------------|----------|------------------------|
| `placeholder`  | Placeholder text to show when no item is selected.  | `string` | `''`                   |

### x-combobox.item
| Prop  | Description                     | Type   |
|-------|---------------------------------|--------|
| `item`| The item object to display.     | `object`|