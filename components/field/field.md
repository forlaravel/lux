# Field
A form field wrapper that groups a label, control, description, and error message.

## Example
```html
<x-field>
    <x-field.label for="email">Email</x-field.label>
    <x-field.content>
        <x-input id="email" type="email" placeholder="you@example.com" />
        <x-field.description>We'll never share your email.</x-field.description>
    </x-field.content>
</x-field>
```

## Example
### With Error
```html
<x-field>
    <x-field.label for="name">Name</x-field.label>
    <x-field.content>
        <x-input id="name" />
        <x-field.error>Name is required.</x-field.error>
    </x-field.content>
</x-field>
```

## Example
### Horizontal Layout
```html
<x-field orientation="horizontal">
    <x-field.label for="username" class="w-32">Username</x-field.label>
    <x-field.content>
        <x-input id="username" placeholder="johndoe" />
    </x-field.content>
</x-field>
```

## Example
### Field Group
```html
<x-field.group>
    <x-field>
        <x-field.label for="first">First Name</x-field.label>
        <x-field.content>
            <x-input id="first" />
        </x-field.content>
    </x-field>
    <x-field>
        <x-field.label for="last">Last Name</x-field.label>
        <x-field.content>
            <x-input id="last" />
        </x-field.content>
    </x-field>
</x-field.group>
```

## Example
### Fieldset with Legend
```html
<x-field.set>
    <x-field.legend>Personal Information</x-field.legend>
    <x-field>
        <x-field.label for="name">Full Name</x-field.label>
        <x-field.content>
            <x-input id="name" />
        </x-field.content>
    </x-field>
    <x-field>
        <x-field.label for="bio">Bio</x-field.label>
        <x-field.content>
            <x-textarea id="bio" />
        </x-field.content>
    </x-field>
</x-field.set>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish field
```

## Properties

### field
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |
| `orientation` | Layout direction | `string` | `vertical` |

### field.label
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `label` |

### field.content
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |

### field.description
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `p` |

### field.error
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `p` |

### field.group
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |

### field.set
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `fieldset` |

### field.legend
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `legend` |
