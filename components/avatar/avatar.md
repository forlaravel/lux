# Avatar
A component used to display a user's profile image, with a fallback option if the image is not available.

## Example
```html
<x-avatar class="h-16 w-16">
    <x-avatar.image src="https://picsum.photos/id/64/200/200" alt="@js" />
    <x-avatar.fallback>JS</x-avatar.fallback>
</x-avatar>

<br>

<x-avatar class="h-24 w-24">
    <x-avatar.image src="https://picsum.photos/id/64/200/200" alt="@js" />
    <x-avatar.fallback>JS</x-avatar.fallback>
</x-avatar>

<br>

<x-avatar class="h-32 w-32">
    <x-avatar.image src="https://picsum.photos/id/64/200/200" alt="@js" />
    <x-avatar.fallback>JS</x-avatar.fallback>
</x-avatar>
```

## Installation

1. Run the following command to publish the avatar component:

```bash
php artisan lux:publish avatar
```

## Accessibility

- Always provide a descriptive `alt` attribute on `<x-avatar.image>` (e.g., the user's name).
- If the avatar is purely decorative (e.g., next to a visible name), use `alt=""` to hide it from screen readers.