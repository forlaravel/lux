# Button
A versatile button component that supports multiple variants and sizes, suitable for various actions within an application.

## Example
```html
<div class="flex gap-2 flex-col items-start" x-data="{ clicked: false }">
    <x-button>Default</x-button>
    <x-button variant="outline" :loading="true">Spinner</x-button>
    <x-button variant="outline">Outline</x-button>
    <x-button variant="destructive" x-on:click="clicked = !clicked" x-bind:data-loading="clicked">Destructive (click me!)</x-button>
    <x-button variant="secondary">Secondary</x-button>
    <x-button variant="ghost">Ghost</x-button>
    <x-button variant="link" x-on:click="clicked = !clicked" x-bind:data-loading="clicked">Link</x-button>
</div>
```

## Example
### Sizes
```html
<div class="flex gap-2 flex-col items-start">
    <x-button size="sm">Link</x-button>
    <x-button size="md">Link</x-button>
    <x-button size="lg">Link</x-button>
    <x-button size="xl">Link</x-button>
</div>
```
## Example
### Icon button
```html
<div>
    <x-button size="icon">
        <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><rect fill="none"/><path d="M19,5h-2V3H7v2H5C3.9,5,3,5.9,3,7v1c0,2.55,1.92,4.63,4.39,4.94c0.63,1.5,1.98,2.63,3.61,2.96V19H7v2h10v-2h-4v-3.1 c1.63-0.33,2.98-1.46,3.61-2.96C19.08,12.63,21,10.55,21,8V7C21,5.9,20.1,5,19,5z M5,8V7h2v3.82C5.84,10.4,5,9.3,5,8z M12,14 c-1.65,0-3-1.35-3-3V5h6v6C15,12.65,13.65,14,12,14z M19,8c0,1.3-0.84,2.4-2,2.82V7h2V8z"/></svg> 
    </x-button>
    <x-button size="icon" variant="destructive">
        <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><g><rect fill="none"/></g><g><g/><g><path d="M12,3c-0.46,0-0.93,0.04-1.4,0.14C7.84,3.67,5.64,5.9,5.12,8.66c-0.48,2.61,0.48,5.01,2.22,6.56 C7.77,15.6,8,16.13,8,16.69V19c0,1.1,0.9,2,2,2h0.28c0.35,0.6,0.98,1,1.72,1s1.38-0.4,1.72-1H14c1.1,0,2-0.9,2-2v-2.31 c0-0.55,0.22-1.09,0.64-1.46C18.09,13.95,19,12.08,19,10C19,6.13,15.87,3,12,3z M14,17h-4v-1h4V17z M10,19v-1h4v1H10z M15.31,13.74c-0.09,0.08-0.16,0.18-0.24,0.26H8.92c-0.08-0.09-0.15-0.19-0.24-0.27c-1.32-1.18-1.91-2.94-1.59-4.7 c0.36-1.94,1.96-3.55,3.89-3.93C11.32,5.03,11.66,5,12,5c2.76,0,5,2.24,5,5C17,11.43,16.39,12.79,15.31,13.74z"/></g><g><rect x="11.5" y="11"/><rect transform="matrix(0.7071 -0.7071 0.7071 0.7071 -4.0312 10.8536)" x="10.59" y="8.79"/><rect transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 14.7678 26.7028)" x="12.41" y="8.79"/></g></g></svg> 
    </x-button>
    <x-button size="icon" variant="outline">
        <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><g><rect fill="none"/></g><g><g/><path d="M14,9l-1-2H7V5.72C7.6,5.38,8,4.74,8,4c0-1.1-0.9-2-2-2S4,2.9,4,4c0,0.74,0.4,1.38,1,1.72V21h2v-4h5l1,2h7V9H14z M18,17h-4 l-1-2H7V9h5l1,2h5V17z"/></g></svg> 
    </x-button>
    <x-button size="icon" variant="ghost">
            <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><g><rect fill="none"/></g><g><g><path d="M17.92,7.02C17.45,4.18,14.97,2,12,2C9.82,2,7.83,3.18,6.78,5.06C4.09,5.41,2,7.74,2,10.5C2,13.53,4.47,16,7.5,16h10 c2.48,0,4.5-2.02,4.5-4.5C22,9.16,20.21,7.23,17.92,7.02z M17.5,14h-10C5.57,14,4,12.43,4,10.5c0-1.74,1.31-3.23,3.04-3.46 l0.99-0.13l0.49-0.87C9.23,4.78,10.56,4,12,4c1.94,0,3.63,1.44,3.95,3.35l0.25,1.52l1.54,0.14C19.01,9.13,20,10.22,20,11.5 C20,12.88,18.88,14,17.5,14z"/><polygon points="14.8,17 11.9,20.32 13.9,21.32 11.55,24 14.2,24 17.1,20.68 15.1,19.68 17.45,17"/><polygon points="8.8,17 5.9,20.32 7.9,21.32 5.55,24 8.2,24 11.1,20.68 9.1,19.68 11.45,17"/></g></g></svg> 
    </x-button>
</div>
<div class="mt-3">
    <x-button size="icon" class="rounded-full">
        <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><rect fill="none"/><path d="M19,5h-2V3H7v2H5C3.9,5,3,5.9,3,7v1c0,2.55,1.92,4.63,4.39,4.94c0.63,1.5,1.98,2.63,3.61,2.96V19H7v2h10v-2h-4v-3.1 c1.63-0.33,2.98-1.46,3.61-2.96C19.08,12.63,21,10.55,21,8V7C21,5.9,20.1,5,19,5z M5,8V7h2v3.82C5.84,10.4,5,9.3,5,8z M12,14 c-1.65,0-3-1.35-3-3V5h6v6C15,12.65,13.65,14,12,14z M19,8c0,1.3-0.84,2.4-2,2.82V7h2V8z"/></svg> 
    </x-button>
    <x-button size="icon" class="rounded-full" variant="destructive">
        <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><g><rect fill="none"/></g><g><g/><g><path d="M12,3c-0.46,0-0.93,0.04-1.4,0.14C7.84,3.67,5.64,5.9,5.12,8.66c-0.48,2.61,0.48,5.01,2.22,6.56 C7.77,15.6,8,16.13,8,16.69V19c0,1.1,0.9,2,2,2h0.28c0.35,0.6,0.98,1,1.72,1s1.38-0.4,1.72-1H14c1.1,0,2-0.9,2-2v-2.31 c0-0.55,0.22-1.09,0.64-1.46C18.09,13.95,19,12.08,19,10C19,6.13,15.87,3,12,3z M14,17h-4v-1h4V17z M10,19v-1h4v1H10z M15.31,13.74c-0.09,0.08-0.16,0.18-0.24,0.26H8.92c-0.08-0.09-0.15-0.19-0.24-0.27c-1.32-1.18-1.91-2.94-1.59-4.7 c0.36-1.94,1.96-3.55,3.89-3.93C11.32,5.03,11.66,5,12,5c2.76,0,5,2.24,5,5C17,11.43,16.39,12.79,15.31,13.74z"/></g><g><rect x="11.5" y="11"/><rect transform="matrix(0.7071 -0.7071 0.7071 0.7071 -4.0312 10.8536)" x="10.59" y="8.79"/><rect transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 14.7678 26.7028)" x="12.41" y="8.79"/></g></g></svg> 
    </x-button>
    <x-button size="icon" class="rounded-full" variant="outline">
        <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><g><rect fill="none"/></g><g><g/><path d="M14,9l-1-2H7V5.72C7.6,5.38,8,4.74,8,4c0-1.1-0.9-2-2-2S4,2.9,4,4c0,0.74,0.4,1.38,1,1.72V21h2v-4h5l1,2h7V9H14z M18,17h-4 l-1-2H7V9h5l1,2h5V17z"/></g></svg> 
    </x-button>
    <x-button size="icon" class="rounded-full" variant="ghost">
            <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><g><rect fill="none"/></g><g><g><path d="M17.92,7.02C17.45,4.18,14.97,2,12,2C9.82,2,7.83,3.18,6.78,5.06C4.09,5.41,2,7.74,2,10.5C2,13.53,4.47,16,7.5,16h10 c2.48,0,4.5-2.02,4.5-4.5C22,9.16,20.21,7.23,17.92,7.02z M17.5,14h-10C5.57,14,4,12.43,4,10.5c0-1.74,1.31-3.23,3.04-3.46 l0.99-0.13l0.49-0.87C9.23,4.78,10.56,4,12,4c1.94,0,3.63,1.44,3.95,3.35l0.25,1.52l1.54,0.14C19.01,9.13,20,10.22,20,11.5 C20,12.88,18.88,14,17.5,14z"/><polygon points="14.8,17 11.9,20.32 13.9,21.32 11.55,24 14.2,24 17.1,20.68 15.1,19.68 17.45,17"/><polygon points="8.8,17 5.9,20.32 7.9,21.32 5.55,24 8.2,24 11.1,20.68 9.1,19.68 11.45,17"/></g></g></svg> 
    </x-button>
</div>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish button
```


## Properties
| Prop     | Description                                                                 | Type      | Default   |
|----------|-----------------------------------------------------------------------------|-----------|-----------|
| `variant`| Determines the styling of the button, can be `default`, `destructive`, `outline`, `secondary`, `ghost`, `link` | `string`  | `default` |
| `size`   | Specifies the size of the button, can be `sm`, `md`, `lg`, `xl`, `icon`     | `string`  | `md`      |
| `loading`| If true, shows a loading spinner and disables the button                     | `boolean` | `false`   |
| `tag`    | Specifies the HTML tag to be used for the button                            | `string`  | `button`  |

