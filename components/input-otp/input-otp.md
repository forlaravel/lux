# Input OTP
A one-time password input with segmented fields.

## Example
```html
<x-input-otp length="6">
    <x-input-otp.group>
        <x-input-otp.slot index="0" />
        <x-input-otp.slot index="1" />
        <x-input-otp.slot index="2" />
    </x-input-otp.group>
    <x-input-otp.separator />
    <x-input-otp.group>
        <x-input-otp.slot index="3" />
        <x-input-otp.slot index="4" />
        <x-input-otp.slot index="5" />
    </x-input-otp.group>
</x-input-otp>
```

## Example
### Four Digits
```html
<x-input-otp length="4">
    <x-input-otp.group>
        <x-input-otp.slot index="0" />
        <x-input-otp.slot index="1" />
        <x-input-otp.slot index="2" />
        <x-input-otp.slot index="3" />
    </x-input-otp.group>
</x-input-otp>
```

## Example
### Form Submission
```html
<x-input-otp length="6" name="otp_code">
    <x-input-otp.group>
        <x-input-otp.slot index="0" />
        <x-input-otp.slot index="1" />
        <x-input-otp.slot index="2" />
        <x-input-otp.slot index="3" />
        <x-input-otp.slot index="4" />
        <x-input-otp.slot index="5" />
    </x-input-otp.group>
</x-input-otp>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish input-otp
```

## Properties

### input-otp
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |
| `length` | Number of OTP digits | `number` | `6` |
| `name` | Form input name | `string\|null` | `null` |
| `value` | Initial OTP value | `string` | `''` |
| `wire:model` | Bind the OTP value to a Livewire property (takes precedence over `value`). | `string` | `null` |

### input-otp.group
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |

### input-otp.slot
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |
| `index` | Slot position index | `number` | *required* |

### input-otp.separator
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |

## Livewire

Use `wire:model` to bind the OTP value to a Livewire property:

```html
<x-input-otp wire:model="otpCode" length="6">
    <x-input-otp.group>
        <x-input-otp.slot index="0" />
        <x-input-otp.slot index="1" />
        <x-input-otp.slot index="2" />
    </x-input-otp.group>
    <x-input-otp.separator />
    <x-input-otp.group>
        <x-input-otp.slot index="3" />
        <x-input-otp.slot index="4" />
        <x-input-otp.slot index="5" />
    </x-input-otp.group>
</x-input-otp>
```

Use the `.live` modifier to sync the value on every change:

```html
<x-input-otp wire:model.live="otpCode" length="6">
    ...
</x-input-otp>
```

## Accessibility

- The component defaults to `aria-label="One-time password"`. Override this via the `aria-label` attribute if a more specific label is appropriate (e.g., `aria-label="Verification code"`).
