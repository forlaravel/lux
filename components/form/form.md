# Form

Create clear and functional forms using our component set. Integrate labels, descriptions, and error messages to improve user experience and clarity. Ideal for building interactive and accessible forms efficiently.

- [View on GitHub](https://github.com/forlaravel/lux)

## Example

```html
<x-form wire:submit="saveForm">
    <x-form.item name="username">
        <x-form.label>Username</x-form.label>
        <x-input wire:model.live="username" x-form:control type="username" placeholder="Enter your username" />
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

```html
 <x-form>
    <x-form.item>
        <x-form.label>Username</x-form.label>
        <x-input x-form:control placeholder="shadcn"/>
        <x-form.description>
            This is your public display name. It can be your real name or a
            pseudonym. You can only change this once every 30 days.
        </x-form.description>
        <x-form.message />
    </x-form.item>


    <x-form.item>
        <x-form.label>Email</x-form.label>
        <x-select x-form:control >
            <option value="Select a verified email to display" disabled>
                Select a verified email to display </option>
            <option value="m@example.com">m@example.com</option>
            <option value="m@google.com">m@google.com</option>
            <option value="m@support.com">m@support.com</option>
        </x-select>
        <x-form.description>
            You can manage verified email addresses in your
            <a class="font-medium underline underline-offset-4">email settings</a>.
        </x-form.description>
        <x-form.message />
    </x-form.item>

    <x-form.item>
        <x-form.label>Bio</x-form.label>
        <x-textarea
            wire:model="bio"
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

    <div>
        @foreach([] as $index => $url)
        <x-form.item>
            <x-form.label
                @class([
                "sr-only" => $index !== 0,
                ])
            >
                URLs
            </x-form.label>
            <x-form.description @class([
                "sr-only" => $index !== 0,
                ])>
                Add links to your website, blog, or social media profiles.
            </x-form.description>
            <x-input x-form:control value="{{ $url['value'] }}"/>
            <x-form.message />
        </x-form.item>
        @endforeach
        <x-button
            variant="outline"
            size="sm"
            class="mt-2"
            wire:click="append"
        >
            Add URL
        </x-button>
    </div>
    <x-button type="submit">Update profile</x-button>
</x-form>
```