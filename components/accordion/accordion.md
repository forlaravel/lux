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

### \<x-accordion>
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `wire:model` | The selected accordion-item via livewire (takes precedence over `value`). | `string` | `null`
| `value` | The selected accordion-item. | `string` | `null`
| `multiple` | Whether multiple accordion items can be open at the same time. | `bool` | `false`
| `animated` | Whether the accordion items should be animated. | `bool` | `true`