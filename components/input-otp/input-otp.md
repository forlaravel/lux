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
