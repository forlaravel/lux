# Sidebar
A simple and flexible sidebar navigation component with collapsible functionality.

## Example
```html
<x-sidebar.provider class="min-h-[500px]" :fixed="false" persist="sidebar">
    <x-sidebar>
        <x-sidebar.header>
            <h2 class="text-lg font-semibold">My App</h2>
        </x-sidebar.header>

        <x-sidebar.content>
            <x-sidebar.group title="Navigation">
                <x-button variant="ghost" class="justify-start">
                    <x-icon.rocket />
                    Dashboard
                </x-button>
                <x-button variant="ghost" class="justify-start">
                    <x-icon.users />
                    Users
                </x-button>
                <x-button variant="ghost" class="justify-start">
                    <x-icon.settings />
                    Settings
                </x-button>
            </x-sidebar.group>

            <x-sidebar.group title="Tools">
                <x-button variant="ghost" class="justify-start">
                    <x-icon.chart />
                    Analytics
                </x-button>
                <x-button variant="ghost" class="justify-start">
                    <x-icon.article />
                    Report
                </x-button>
            </x-sidebar.group>
        </x-sidebar.content>

        <x-sidebar.footer>
            <x-button variant="ghost" class="justify-start">
                <x-icon.account />
                Profile
            </x-button>
        </x-sidebar.footer>
    </x-sidebar>

    <main class="flex-1">
        <header class="p-3">
            <x-sidebar.trigger>
                <x-button size="icon" variant="ghost" tag="span">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="3" rx="2"></rect><path d="M9 3v18"></path></svg>
                </x-button>
            </x-sidebar.trigger>
        </header>

        <div class="p-6">
            <!-- Main content -->
        </div>
    </main>
</x-sidebar.provider>
```


## Installation

1. Run the following command:

```bash
php artisan lux:publish sidebar
```

## Components

### sidebar.provider
| Prop | Description | Type | Default |
|------|-------------|------|---------|
| `tag` | HTML tag for the provider wrapper | `string` | `div` |
| `open` | Initial open state of the sidebar | `boolean` | `true` |
| `wire:model` | Bind sidebar open state to a Livewire property (takes precedence over `open`). | `boolean` | `null` |
| `fixed` | Whether the sidebar uses fixed positioning | `boolean` | `true` |
| `side` | Position of the sidebar: `left`, `right` | `string` | `left` |

### sidebar
| Prop | Description | Type | Default |
|------|-------------|------|---------|
| `tag` | HTML tag for the sidebar element | `string` | `aside` |
| `side` | Position of the sidebar: `left`, `right` | `string` | `left` |

### sidebar.group
| Prop | Description | Type | Default |
|------|-------------|------|---------|
| `tag` | HTML tag for the group wrapper | `string` | `div` |
| `title` | Optional title for the group | `string` | `null` |

### sidebar.trigger
| Prop | Description | Type | Default |
|------|-------------|------|---------|
| `tag` | HTML tag for the trigger element | `string` | `button` |

> **Note:** When placing an `<x-button>` inside the trigger, set `tag="span"` on the trigger to avoid nesting a `<button>` inside a `<button>` (invalid HTML that breaks click handling).

### Other Components
- `x-sidebar.header` - Sticky header section at the top of the sidebar
- `x-sidebar.content` - Scrollable main content area
- `x-sidebar.footer` - Sticky footer section at the bottom of the sidebar

## Livewire

Use `wire:model` on the provider to bind the sidebar's open state to a Livewire property:

```html
<x-sidebar.provider wire:model="sidebarOpen">
    <x-sidebar>
        ...
    </x-sidebar>
    <main>...</main>
</x-sidebar.provider>
```

Use the `.live` modifier to sync the state on every change:

```html
<x-sidebar.provider wire:model.live="sidebarOpen">
    ...
</x-sidebar.provider>
```

## Accessibility

- The sidebar renders as an `<aside>` with `aria-label="Sidebar"` by default. If your page has multiple sidebars, override the `aria-label` to be unique: `<x-sidebar aria-label="Settings sidebar">`.
- The trigger includes `aria-expanded` and `aria-controls` automatically when using the default `tag="button"`. When wrapping an `<x-button>` inside the trigger (with `tag="span"`), ensure the inner button conveys the toggle purpose (e.g., include sr-only text or an `aria-label`).
- Use `<nav>` elements or `role="navigation"` inside the sidebar content to identify navigation regions for screen readers.