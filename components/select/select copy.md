# Select
A component used to create interactive dropdown menus. The dropdown can be customized and includes options for items, labels, separators, and triggers.

## Example
```html
<x-select :searchable="true">
    <x-select.trigger>
        <x-select.value/>
    </x-select.trigger>
    <x-select.content>
        <x-select.label>Select a framework</x-select.label>
        <x-select.item value="next">Next.js</x-select.item>
        <x-select.item value="sveltekit">Svelte</x-select.item>
        <x-select.item value="nada" disabled>Nada</x-select.item>
        <x-select.item value="astro">Astro</x-select.item>
        <x-select.item value="nuxt">Nuxt.js</x-select.item>
    </x-select.content>
</x-select>
<br>
Test: {{ join(', ', $this->test) }}

<x-select :searchable="true" wire:search.live="testSearch2" wire:model.live="testValue2" :clientSearch="false">
    <x-select.trigger>
        <x-select.value/>
    </x-select.trigger>
    <x-select.content>
        <x-select.label>Select a name</x-select.label>
        @foreach($this->listOfTestItems2 as $key => $item)
            <x-select.item wire:key="{{ $key }}" value="{{ $key }}">{{ $item }}</x-select.item>
        @endforeach
    </x-select.content>
</x-select>

<x-select wire:model.live="test" :multiple="true" :searchable="true">
    <x-select.trigger>
        <x-select.value/>
    </x-select.trigger>
    <x-select.content>
        <x-select.label>Select a name</x-select.label>
        <x-select.item value="next">Next.js</x-select.item>
        <x-select.item value="sveltekit">Svelte</x-select.item>
        <x-select.item value="nada" disabled>Nada</x-select.item>
        <x-select.item value="astro">Astro</x-select.item>
        <x-select.item value="nuxt">Nuxt.js</x-select.item>
    </x-select.content>
</x-select>

<br>
Search: {{ $this->testSearch }}
<div>
Selected: {{ is_array($this->testValue) ? join(', ', $this->testValue) : $this->testValue }}
</div>



<!-- multiple without a values goes wrong still -->
<x-select :searchable="true" :multiple="true" wire:search.live="testSearch" wire:model.live="testValue" :clientSearch="false">
    <x-select.trigger>
        <x-select.value/>
    </x-select.trigger>
    <x-select.content>
        <x-select.label>Select a name</x-select.label>
        @foreach($this->listOfTestItems as $key => $item)
            <x-select.item wire:key="{{ $key }}" value="{{ $key }}">{{ $item }}</x-select.item>
        @endforeach
    </x-select.content>
</x-select>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish select
```

## Components and Their Properties

### x-select

| Prop        | Description                                  | Type     | Default       |
|-------------|----------------------------------------------|----------|---------------|
| `selected`  | Sets the initially selected value            | `mixed`  | `null`        |

### x-select.trigger

| Prop        | Description                                  | Type     | Default       |
|-------------|----------------------------------------------|----------|---------------|
| -           | No configurable properties                   | -        | -             |

### x-select.content

| Prop        | Description                                  | Type     | Default       |
|-------------|----------------------------------------------|----------|---------------|
| -           | No configurable properties                   | -        | -             |

### x-select.group

| Prop        | Description                                  | Type     | Default       |
|-------------|----------------------------------------------|----------|---------------|
| -           | No configurable properties                   | -        | -             |

### x-select.item

| Prop        | Description                                  | Type     | Default       |
|-------------|----------------------------------------------|----------|---------------|
| `value`     | The value representing this dropdown item    | `mixed`  | `null`        |
| `disabled`  | Whether the item is disabled                 | `bool`   | `false`       |

### x-select.label

| Prop        | Description                                  | Type     | Default       |
|-------------|----------------------------------------------|----------|---------------|
| -           | No configurable properties                   | -        | -             |

### x-select.separator

| Prop        | Description                                  | Type     | Default       |
|-------------|----------------------------------------------|----------|---------------|
| -           | No configurable properties                   | -        | -             |

### x-select.value

| Prop        | Description                                  | Type     | Default       |
|-------------|----------------------------------------------|----------|---------------|
| `placeholder`| The placeholder text if no value is selected| `string` | `''`          |