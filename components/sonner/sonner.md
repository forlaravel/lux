# Sonner

An opinionated toast notification component. Place `<x-sonner />` once in your root layout and trigger toasts from anywhere using the global `toast()` function.

## Usage

### Layout Setup

Add the Toaster to your root layout (e.g., `layouts/app.blade.php`):

```html
<body>
    {{ $slot }}
    <x-sonner />
</body>
```

### Triggering Toasts

From Alpine.js (inline or component):

```html
<button @click="toast('Event has been created')">Show Toast</button>
```

From JavaScript:

```javascript
toast('Event has been created');
toast.success('Profile saved successfully');
toast.error('Something went wrong');
toast.warning('Please review your input');
toast.info('New update available');
toast.loading('Uploading file...');
```

### With Description

```javascript
toast('Event created', {
    description: 'Monday, January 3rd at 6:00pm',
});
```

### With Action Buttons

```javascript
toast('File deleted', {
    action: {
        label: 'Undo',
        onClick: () => { /* undo logic */ },
    },
    cancel: {
        label: 'Dismiss',
        onClick: () => {},
    },
});
```

### Dismiss Programmatically

```javascript
const id = await toast.loading('Uploading...');

// Later:
toast.dismiss(id);
```

### From Livewire

```php
// In your Livewire component
$this->dispatch('sonner', message: 'Saved!', type: 'success');
```

## Toast Options

All options are passed to the `toast()` function:

```javascript
toast('Message', { ...options });
```

| Option | Type | Default | Description |
|--------|------|---------|-------------|
| `description` | string | `''` | Secondary description text |
| `type` | string | `'default'` | `default`, `success`, `error`, `warning`, `info`, `loading` |
| `duration` | number | `4000` | Auto-dismiss time in ms. Use `Infinity` to disable |
| `dismissible` | boolean | `true` | Allow dismissal |
| `closeButton` | boolean | `false` | Show close button on this toast |
| `action` | object | `null` | `{ label: string, onClick: function }` |
| `cancel` | object | `null` | `{ label: string, onClick: function }` |
| `id` | string | auto | Custom toast identifier |
| `position` | string | `'bottom-right'` | `top-left`, `top-center`, `top-right`, `bottom-left`, `bottom-center`, `bottom-right` |
| `stacked` | boolean | `true` | Per-toast: collapse into a deck; expands on hover |
| `richColors` | boolean | `false` | Colorful backgrounds for typed toasts |
| `visibleToasts` | number | `3` | Maximum visible toasts |
| `gap` | number | `14` | Gap between toasts in px |
| `offset` | number/string | `32` | Distance from screen edge |

## Example

```html
<x-sonner />

<div class="flex flex-wrap gap-2">
    <x-button @click="toast('Event has been created')">
        Default
    </x-button>

    <x-button variant="outline" @click="toast.success('Profile saved successfully', { richColors: true })">
        Success
    </x-button>

    <x-button variant="outline" @click="toast.error('Something went wrong', { richColors: true })">
        Error
    </x-button>

    <x-button variant="outline" @click="toast.warning('Please review your input', { richColors: true })">
        Warning
    </x-button>

    <x-button variant="outline" @click="toast.info('A new update is available', { richColors: true })">
        Info
    </x-button>

    <x-button variant="outline" @click="toast.loading('Uploading file...')">
        Loading
    </x-button>

    <x-button variant="outline" @click="toast('Event created', {
        description: 'Monday, January 3rd at 6:00pm',
        closeButton: true,
    })">
        With Description
    </x-button>

    <x-button variant="outline" @click="toast('File deleted', {
        action: { label: 'Undo', onClick: () => toast.success('Undone!') },
        cancel: { label: 'Dismiss' },
    })">
        With Actions
    </x-button>

    <x-button variant="outline" @click="toast('Appeared top-center!', {
        position: 'top-center',
    })">
        Top Center
    </x-button>

    <x-button variant="outline" @click="toast('Not stacked', {
        stacked: false,
    })">
        Disable Stacking
    </x-button>
</div>
```
