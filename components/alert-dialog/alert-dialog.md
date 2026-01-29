# Alert Dialog
A modal dialog that interrupts the user with important content and expects a response. Unlike dialog, it cannot be dismissed by clicking outside.

## Example
```html
<x-alert-dialog>
    <x-alert-dialog.trigger>
        <x-button variant="outline">Delete Account</x-button>
    </x-alert-dialog.trigger>
    <x-alert-dialog.content>
        <x-alert-dialog.header>
            <x-alert-dialog.title>Are you absolutely sure?</x-alert-dialog.title>
            <x-alert-dialog.description>
                This action cannot be undone. This will permanently delete your account and remove your data from our servers.
            </x-alert-dialog.description>
        </x-alert-dialog.header>
        <x-alert-dialog.footer>
            <x-alert-dialog.cancel>Cancel</x-alert-dialog.cancel>
            <x-alert-dialog.action>Continue</x-alert-dialog.action>
        </x-alert-dialog.footer>
    </x-alert-dialog.content>
</x-alert-dialog>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish alert-dialog
```

## Properties

### alert-dialog
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |
| `open` | Whether the dialog is open | `boolean` | `false` |

### alert-dialog.trigger
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |

### alert-dialog.content
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `dialog` |

### alert-dialog.header
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |

### alert-dialog.title
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `h2` |

### alert-dialog.description
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `p` |

### alert-dialog.footer
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |

### alert-dialog.action
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `button` |

### alert-dialog.cancel
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `button` |
