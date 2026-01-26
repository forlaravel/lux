# Tabs
A component used to create tabbed navigation interfaces, allowing users to switch between different content sections.

## Example
```html
<x-tabs>
    <x-tabs.list>
        <x-tabs.trigger value="tab1">Tab 1</x-tabs.trigger>
        <x-tabs.trigger value="tab2">Tab 2</x-tabs.trigger>
    </x-tabs.list>

    <x-tabs.content value="tab1">
        <x-card>
            <x-card.content>Content for Tab 1</x-card.content>
        </x-card>
    </x-tabs.content>
    <x-tabs.content value="tab2">
        <x-card>
            <x-card.content>Content for Tab 2</x-card.content>
        </x-card>
    </x-tabs.content>
</x-tabs>

<br>

<x-tabs variant="switch" persist="tabs1">
    <x-tabs.list>
        <x-tabs.trigger value="tab1">Tab 1</x-tabs.trigger>
        <x-tabs.trigger value="tab2">Tab 2</x-tabs.trigger>
    </x-tabs.list>

    <x-tabs.content value="tab1">
        <x-card>
            <x-card.content>Content for Tab 1</x-card.content>
        </x-card>
    </x-tabs.content>
    <x-tabs.content value="tab2">
        <x-card>
            <x-card.content>Content for Tab 2</x-card.content>
        </x-card>
    </x-tabs.content>
</x-tabs>
<br>

<x-tabs variant="underline" persist="tabs2">
    <x-tabs.list>
        <x-tabs.trigger value="tab1">Tab 1</x-tabs.trigger>
        <x-tabs.trigger value="tab2">Tab 2</x-tabs.trigger>
    </x-tabs.list>

    <x-tabs.content value="tab1">
        <x-card>
            <x-card.content>Content for Tab 1</x-card.content>
        </x-card>
    </x-tabs.content>
    <x-tabs.content value="tab2">
        <x-card>
            <x-card.content>Content for Tab 2</x-card.content>
        </x-card>
    </x-tabs.content>
</x-tabs>
```

## Example
With ``variant="switch"``, the tabs will be styled as switches.
```html
<x-tabs variant="switch" persist="yessir">
    <x-tabs.list>
        <x-tabs.trigger value="tab1">Tab 1</x-tabs.trigger>
        <x-tabs.trigger value="tab2">Tab 2</x-tabs.trigger>
    </x-tabs.list>

    <x-tabs.content value="tab1">
        <x-card>
            <x-card.content>Content for Tab 1</x-card.content>
        </x-card>
    </x-tabs.content>
    <x-tabs.content value="tab2">
        <x-card>
            <x-card.content>Content for Tab 2</x-card.content>
        </x-card>
    </x-tabs.content>
</x-tabs>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish tabs
```



## Components

### tabs
| Prop            | Description                                                   | Type     | Default   |
|-----------------|---------------------------------------------------------------|----------|-----------|
| `value` | The value of the tab to be active by default.                  | `string` | `null`    |
| `variant`       | Determines the styling of the tab component: `default` (underline indicator), `switch` (pill/background), or `underline` (text-only) | `string` | `default`  |
| `persist`       | If set, the active tab will be saved in local storage with this key, allowing the tab state to persist across page reloads. | `string` | `null`    |

### tabs.list
Defines the container for the tab triggers. The styling of this container can change based on the `variant` prop of `x-tabs`.

### tabs.trigger
| Prop    | Description                                              | Type     |
|---------|----------------------------------------------------------|----------|
| `value` | The value associated with this tab. It should be unique. | `string` |

### tabs.content
| Prop    | Description                                              | Type     |
|---------|----------------------------------------------------------|----------|
| `value` | The value associated with this content section. It should match the value of a `x-tabs.trigger`. | `string` |