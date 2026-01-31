# Tab Bar

A mobile-style bottom navigation bar inspired by apps like Spotify. Displays icon and label pairs fixed at the bottom of the screen.

## Example
```html
<x-tab-bar value="home">
    <x-tab-bar.content value="home">
        <x-card><x-card.content>Home content goes here</x-card.content></x-card>
    </x-tab-bar.content>
    <x-tab-bar.content value="search">
        <x-card><x-card.content>Search content goes here</x-card.content></x-card>
    </x-tab-bar.content>
    <x-tab-bar.content value="library">
        <x-card><x-card.content>Your Library content goes here</x-card.content></x-card>
    </x-tab-bar.content>

    <x-tab-bar.nav>
        <x-tab-bar.item value="home" label="Home">
            <x-slot:icon>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955a1.126 1.126 0 0 1 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" /></svg>
            </x-slot:icon>
        </x-tab-bar.item>
        <x-tab-bar.item value="search" label="Search">
            <x-slot:icon>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" /></svg>
            </x-slot:icon>
        </x-tab-bar.item>
        <x-tab-bar.item value="library" label="Library">
            <x-slot:icon>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21" /></svg>
            </x-slot:icon>
        </x-tab-bar.item>
    </x-tab-bar.nav>
</x-tab-bar>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish tab-bar
```

## Components

### tab-bar
| Prop    | Description                                              | Type     | Default |
|---------|----------------------------------------------------------|----------|---------|
| `value` | The value of the tab to be active by default.            | `string` | `null`  |

### tab-bar.nav
Container for the tab bar items. Renders the actual bottom navigation bar.

### tab-bar.item
| Prop    | Description                                              | Type     | Default  |
|---------|----------------------------------------------------------|----------|----------|
| `value` | The value associated with this tab item. Must be unique. | `string` | required |
| `label` | The text label displayed below the icon.                 | `string` | `null`   |
| `icon`  | Slot for an SVG icon displayed above the label.          | `slot`   | -        |

### tab-bar.content
| Prop    | Description                                                                        | Type     | Default  |
|---------|------------------------------------------------------------------------------------|----------|----------|
| `value` | The value associated with this content panel. Should match a `tab-bar.item` value. | `string` | required |
