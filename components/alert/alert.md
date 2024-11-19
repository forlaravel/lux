# Alert
A component used to display important messages to the user, with various styling options based on the alert type.

## Example
```html
<x-alert>
    <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M4.47 21h15.06c1.54 0 2.5-1.67 1.73-3L13.73 4.99c-.77-1.33-2.69-1.33-3.46 0L2.74 18c-.77 1.33.19 3 1.73 3zM12 14c-.55 0-1-.45-1-1v-2c0-.55.45-1 1-1s1 .45 1 1v2c0 .55-.45 1-1 1zm1 4h-2v-2h2v2z"/></svg> 
    <x-alert.title>Heads up!</x-alert.title>
    <x-alert.description>
        The is the default variant.
    </x-alert.description>
</x-alert>
<br>
<x-alert variant="destructive">
    <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M4.47 21h15.06c1.54 0 2.5-1.67 1.73-3L13.73 4.99c-.77-1.33-2.69-1.33-3.46 0L2.74 18c-.77 1.33.19 3 1.73 3zM12 14c-.55 0-1-.45-1-1v-2c0-.55.45-1 1-1s1 .45 1 1v2c0 .55-.45 1-1 1zm1 4h-2v-2h2v2z"/></svg>
    <x-alert.title>Heads up!</x-alert.title>
    <x-alert.description>
        You can add components to your app using the CLI.
    </x-alert.description>
</x-alert>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish alert
```

## Properties

### alert
| Prop      | Description                                     | Type     | Default   |
|-----------|-------------------------------------------------|----------|-----------|
| `variant` | Determines the styling of the alert component, can be one of `default` `destructive`  | `string` | `default` |