# Form

Create clear and functional forms using our component set. Integrate labels, descriptions, and error messages to improve user experience and clarity. Ideal for building interactive and accessible forms efficiently.

- [View on GitHub](https://github.com/forlaravel/lux)

## Example

```html
<x-form wire:submit="saveForm">
    <x-form.item name="username">
        <x-form.label>Username</x-form.label>
        <x-input persist wire:model.live="username" x-form:control placeholder="Enter your username" />
        <x-form.description>Enter your preferred username.</x-form.description>
        <x-form.message />
    </x-form.item>

    <x-button type="submit">Submit</x-button>
</x-form>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish form
```



## Example
### Form with classic post action
```html
 <x-form action="{{ route('form-demo') }}" method="POST">
    @csrf
    <x-form.item>
        <x-form.label>Username</x-form.label>
        <x-input persist required name="username" x-form:control placeholder="shadcn"/>
        <x-form.description>
            This is your public display name. It can be your real name or a
            pseudonym. You can only change this once every 30 days.
        </x-form.description>
        <x-form.message />
    </x-form.item>

    <x-form.item>
        <x-form.label>Languages</x-form.label>
        <x-select 
            required 
            persist 
            x-form:control 
            name="languages" 
            placeholder="Programming Languages" 
            :searchable="true" 
            :multiple="true" 
            :value="['php', 'laravel']"
        >
            <x-select.trigger>
                <x-select.value/>
            </x-select.trigger>
            <x-select.content teleport="body">
                <x-select.label>Languages</x-select.label>
                <x-select.item value="python">Python</x-select.item>
                <x-select.item value="javascript">JavaScript</x-select.item>
                <x-select.item value="ruby" disabled>Ruby</x-select.item>
                <x-select.item value="php">PHP</x-select.item>
                <x-select.separator/>
                <x-select.label>Frameworks</x-select.label>
                <x-select.item value="django">Django</x-select.item>
                <x-select.item value="laravel">Laravel</x-select.item>
                <x-select.item value="vue">Vue</x-select.item>
                <x-select.item value="angular">Angular</x-select.item>
            </x-select.content>
        </x-select>
        <x-form.description>
            Select the programming languages and frameworks you are familiar with.
        </x-form.description>
        <x-form.message />
    </x-form.item>

    <x-form.item>
        <x-form.label>Bio</x-form.label>
        <x-textarea
            persist
            name="bio"
            x-form:control
            placeholder="Tell us a little bit about yourself"
            class="resize-none"
        />
        <x-form.description>
            You can <span>@mention</span> other users and organizations to
            link to them.
        </x-form.description>
        <x-form.message />
    </x-form.item>

    <x-form.item>
        <div class="flex gap-2.5 items-center">
            <x-checkbox persist name="agreed" x-form:control />
            <x-form.label>Accept terms and conditions</x-form.label>
        </div>
        <x-form.message />
    </x-form.item>

    <x-button type="submit">Update profile</x-button>
</x-form>
```

## Accessibility

- Add the `x-form:control` attribute to each form control (input, select, textarea, etc.) inside `<x-form.item>`. This is required for the automatic label association, `aria-describedby`, `aria-invalid`, and `aria-errormessage` bindings to work.
- Provide the `name` prop on `<x-form.item>` to enable automatic server-side error display via `<x-form.message>`.