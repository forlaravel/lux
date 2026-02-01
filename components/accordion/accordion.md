# Accordion
A vertically stacked set of interactive headings that each reveal a section of content.

## Example
```html
<x-accordion>
    <x-accordion.item>
        <x-accordion.trigger>Is it accessible?</x-accordion.trigger>
        <x-accordion.content>
            Yes. It adheres to the WAI-ARIA design pattern.
        </x-accordion.content>
    </x-accordion.item>

    <x-accordion.item>
        <x-accordion.trigger>Is it styled?</x-accordion.trigger>
        <x-accordion.content>
            Yes. It comes with default styles that match the other components' aesthetic.
        </x-accordion.content>
    </x-accordion.item>

    <x-accordion.item>
        <x-accordion.trigger>Is it animated?</x-accordion.trigger>
        <x-accordion.content>
            Yes. It's animated by default, but you can disable it if you prefer.
        </x-accordion.content>
    </x-accordion.item>
</x-accordion>
```

## Example
```html
<x-accordion persist="accordion" :multiple="true" :animated="false">
    <x-accordion.item>
        <x-accordion.trigger>What is the `multiple` property about?</x-accordion.trigger>
        <x-accordion.content>
            When the multiple property is set to true, multiple accordion items can be open at the same time.
        </x-accordion.content>
    </x-accordion.item>

    <x-accordion.item>
        <x-accordion.trigger>And what about the `animated` property?</x-accordion.trigger>
        <x-accordion.content>
            When the animated property is set to false, the accordion items won't be animated.
        </x-accordion.content>
    </x-accordion.item>
</x-accordion>
```

## Installation

1. Run the following command

```bash
php artisan lux:publish accordion
```


## Properties

### accordion
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `value` | The selected accordion item | `string` | `null` |
| `wire:model` | Bind selected item to a Livewire property (takes precedence over `value`). | `string` | `null` |
| `multiple` | Whether multiple items can be open at the same time | `boolean` | `false` |
| `animated` | Whether items should be animated | `boolean` | `true` |

## Livewire

Use `wire:model` to bind the selected accordion item to a Livewire property:

```html
<x-accordion wire:model="openItem">
    <x-accordion.item>
        <x-accordion.trigger>Section 1</x-accordion.trigger>
        <x-accordion.content>Content 1</x-accordion.content>
    </x-accordion.item>
    <x-accordion.item>
        <x-accordion.trigger>Section 2</x-accordion.trigger>
        <x-accordion.content>Content 2</x-accordion.content>
    </x-accordion.item>
</x-accordion>
```