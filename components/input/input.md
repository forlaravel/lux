# Input
A component used to create various types of input fields with consistent styling.

## Example
```html
<x-input type="email" placeholder="Enter your email" />
```

## Example
### Label
```html
<div class="grid w-full max-w-sm items-center gap-1.5">
    <x-label for="name">Name</x-label>
    <x-input id="name" type="text" placeholder="Enter your name" />
</div>
```

## Example
### Masking
```html
<div class="grid w-full max-w-sm items-center gap-1.5">
    <x-label for="name">Telephone</x-label>
    <x-input id="name" type="text" mask="(999) 999-9999" placeholder="(123) 456-7890" />
</div>
```

## Example
### Button
```html
<div class="flex w-full max-w-sm items-center gap-1.5">
    <x-input id="email" type="email" placeholder="Email" />
    <x-button type="submit">
      Subscribe
    </x-button>
</div>
```

## Example
### File
```html
<div class="grid w-full max-w-sm items-center gap-1.5">
    <x-label for="picture">Picture</x-label>
    <x-input id="picture" type="file" class="cursor-pointer" />
</div>
```

## Example
### Search
```html
 <div class="relative w-full max-w-sm items-center">
    <x-input id="search" type="text" placeholder="Search..." class="pl-10" />
    <span class="absolute start-0 inset-y-0 flex items-center justify-center px-2">
        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"/></svg> 
    </span>
</div>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish input
```


## Properties

### input
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | The HTML tag to render | `string` | `input` |
| `type` | The type attribute for the input | `string` | `text` |
| `mask` | The mask pattern to apply to the input. See https://alpinejs.dev/plugins/mask | `string` | `null` |
| `value` | The value attribute for the input | `string` | `null` |