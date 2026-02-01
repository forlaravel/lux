# Select
The `x-select` component is a versatile and accessible dropdown element. It supports features 
like searchability, multiple selections, and seamless integration with Livewire for dynamic
 data binding and search capabilities.


## Example
```html
<x-select placeholder="Fruits & Vegetables" name="fav">
    <x-select.trigger>
        <x-select.value/>
    </x-select.trigger>
    <x-select.content>
        <x-select.label>Fruits</x-select.label>
        <x-select.item value="apple">Apple</x-select.item>
        <x-select.item value="banana">Banana</x-select.item>
        <x-select.item value="cherry">Cherry</x-select.item>
        <x-select.item value="elderberry">Elderberry</x-select.item>
        <x-select.item value="date" disabled>Date</x-select.item>
        <x-select.separator/>
        <x-select.label>Vegetables</x-select.label>
        <x-select.item value="asparagus">Asparagus</x-select.item>
        <x-select.item value="broccoli">Broccoli</x-select.item>
        <x-select.item value="carrot">Carrot</x-select.item>
    </x-select.content>
</x-select>
```

## Example
### Sizes
```html
<div class="grid w-full max-w-sm gap-2">
    <x-select size="sm" placeholder="Size sm">
        <x-select.trigger>
            <x-select.value/>
        </x-select.trigger>
        <x-select.content>
            <x-select.item value="a">Option A</x-select.item>
            <x-select.item value="b">Option B</x-select.item>
        </x-select.content>
    </x-select>
    <x-select size="md" placeholder="Size md">
        <x-select.trigger>
            <x-select.value/>
        </x-select.trigger>
        <x-select.content>
            <x-select.item value="a">Option A</x-select.item>
            <x-select.item value="b">Option B</x-select.item>
        </x-select.content>
    </x-select>
    <x-select size="lg" placeholder="Size lg">
        <x-select.trigger>
            <x-select.value/>
        </x-select.trigger>
        <x-select.content>
            <x-select.item value="a">Option A</x-select.item>
            <x-select.item value="b">Option B</x-select.item>
        </x-select.content>
    </x-select>
    <x-select size="xl" placeholder="Size xl">
        <x-select.trigger>
            <x-select.value/>
        </x-select.trigger>
        <x-select.content>
            <x-select.item value="a">Option A</x-select.item>
            <x-select.item value="b">Option B</x-select.item>
        </x-select.content>
    </x-select>
</div>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish select
```

## Components and Their Properties

### select

| Prop           | Description                                                                 | Type                | Default            |
|----------------|-----------------------------------------------------------------------------|---------------------|--------------------|
| `value`        | The selected item.                                                          | `string` or `array` | `null`             |
| `wire:model`   | Model selected item to Livewire (takes precedence over `value`).            | `string` or `array` | `null`             |
| `wire:search`  | Model search query to Livewire (use with `searchable` and `clientSearch`).  | `string`            | `''`               |
| `tag`          | The tag to use for the component.                                           | `string`            | `div`              |
| `name`         | The name attribute for form submission                                      | `string`            | `null`             |
| `multiple`     | Whether multiple items can be selected.                                     | `boolean`           | `false`            |
| `searchable`   | Whether the dropdown is searchable.                                         | `boolean`           | `false`            |
| `placeholder`  | The placeholder text.                                                       | `string`            | `Select an option` |
| `clientSearch` | Whether to search on the client side.                                       | `boolean`           | `true`             |
| `size`         | Specifies the size of the select trigger, can be `sm`, `md`, `lg`, `xl`     | `string`            | `md`               |

### trigger
The trigger element displays a focus ring when focused or when the searchable input within it receives focus.

### content
| Prop           | Description                                                                 | Type                | Default            |
|----------------|-----------------------------------------------------------------------------|---------------------|--------------------|
| `teleport`     | Teleport dropdown to target. Does not work with dynamic Livewire data.      | `string` e.g `'body'`| `null`             |

## Example
### Multiple, searchable, teleported
```html
<x-select name="languages" placeholder="Programming Languages" :searchable="true" :multiple="true" :value="['php', 'laravel']">
    <x-select.trigger>
        <x-select.value/>
    </x-select.trigger>
    <x-select.content teleport="body">
        <x-select.label>Languages</x-select.label>
        <x-select.item value="python">Python</x-select.item>
        <x-select.item value="javascript">JavaScript</x-select.item>
        <x-select.item value="java">Java</x-select.item>
        <x-select.item value="csharp">C#</x-select.item>
        <x-select.item value="ruby" disabled>Ruby</x-select.item>
        <x-select.item value="php">PHP</x-select.item>
        <x-select.separator/>
        <x-select.label>Frameworks</x-select.label>
        <x-select.item value="django">Django</x-select.item>
        <x-select.item value="react">React</x-select.item>
        <x-select.item value="spring">Spring</x-select.item>
        <x-select.item value="laravel">Laravel</x-select.item>
        <x-select.item value="vue">Vue</x-select.item>
        <x-select.item value="angular">Angular</x-select.item>
    </x-select.content>
</x-select>
```

## Example
### Livewire search
```html
<x-label for="medicine">Medicine</x-label>

<x-select class="mt-2" id="medicine" name="medicine" placeholder="Type to search.." :searchable="true" :clientSearch="false" wire:search.live="medSearch" wire:model.live="medValue">
    <x-select.trigger>
        <x-select.value/>
    </x-select.trigger>
    <x-select.content>
        <x-select.label>Found {{ $this->foundMedicines->count() }} medicines</x-select.label>
        @foreach($this->foundMedicines->take(6) as $key => $item)
            <x-select.item wire:key="{{ $key }}" value="{{ $key }}">{{ $item }}</x-select.item>
        @endforeach
        <x-select.item class="{{ $this->foundMedicines->count() - 6 <= 0 ? 'hidden' : '' }}" wire:key="more" value="more" disabled>And {{ $this->foundMedicines->count() - 6 }} more...</x-select.item>
    </x-select.content>
</x-select>

<!-- 
class SomeComponent extends Livewire\Component
{
    public $medSearch = '';
    public $medValue = '';

    #[Computed(cache: true)]
    public function randomMedicineList() {
        return ....
    }

    #[Computed()]
    public function foundMedicines()
    {
        return $this->randomMedicineList
            ->when($this->medSearch, fn($list) => 
                $list->filter(fn($item) => 
                    str($item)->lower()->contains(str($this->medSearch)->lower())
                )
            );
    }
}
-->
```

## Example
### Native select
```html
<x-select.native name="languages" placeholder="Programming Languages">
   <option value="Select a fruit" selected="" disabled="">
        Select a fruit
    </option>
    <option value="apple">Apple</option>
    <option value="banana">Banana</option>
    <option value="blueberry">Blueberry</option>
    <option value="grapes">Grapes</option>
    <option value="pineapple">Pineapple</option>
</x-select.native>
```

## Accessibility

- The trigger defaults to using the `placeholder` text as its `aria-label`. For a more descriptive label, pass `aria-label` or `aria-labelledby` on the trigger: `<x-select.trigger aria-label="Choose a fruit">`.
- When using `<x-select.native>`, you must associate a `<label>` element with the native select using `for`/`id`, or add an `aria-label` attribute directly.
- Items with `disabled` are marked with `aria-disabled="true"` automatically.