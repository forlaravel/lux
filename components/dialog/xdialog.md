# Dialog
The `Dialog` component is a versatile and interactive way to display modals on your application. It's perfect for capturing user attention or displaying essential information in a stylish manner. Whether you need a simple alert dialog or a fully-featured form, this dialog component has got your back!

## Example
```html
<x-dialog>
    <x-dialog.trigger>
        <x-button tag="span">Open Dialog</x-button>    
    </x-dialog.trigger>

    <x-dialog.content>
        <x-dialog.header>
            <x-dialog.title>Notice</x-dialog.title>
        </x-dialog.header>

        <x-dialog.description>
            Ensure you save your changes before leaving!
        </x-dialog.description>

        <x-dialog.footer>
            <x-button variant="destructive">Save Changes</x-button>
            <x-dialog.close>
                <x-button tag="span">Close</x-button>    
            </x-dialog.close>
        </x-dialog.footer>
    </x-dialog.content>
</x-dialog>
sdfsds
<x-dialog>
    <x-dialog.trigger>
        <x-button tag="span">Open Dialog2</x-button>    
    </x-dialog.trigger>

    <x-dialog.content>
        <x-dialog.header>
            <x-dialog.title>Notice</x-dialog.title>
        </x-dialog.header>

        <x-dialog.description>
            Ensure you save your changes before leaving!
        </x-dialog.description>

        <x-dialog.footer>
            <x-button variant="destructive">Save Changes</x-button>
            <x-dialog.close>
                <x-button tag="span">Close</x-button>    
            </x-dialog.close>
        </x-dialog.footer>
    </x-dialog.content>
</x-dialog>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish dialog
```

## Properties

### dialog.trigger
| Prop      | Description                                    | Type     | Default   |
|-----------|------------------------------------------------|----------|-----------|
| `variant` | Determines the styling of the trigger button, can be one of `default`, `outline` | `string` | `outline` |

### dialog.close
| Prop      | Description                                    | Type     | Default   |
|-----------|------------------------------------------------|----------|-----------|
| `variant` | Determines the styling of the close button, can be one of `default`, `outline` | `string` | `outline` |

## Customization

You can customize your dialog by placing any content inside the `<x-dialog.content>` element. Use the `<x-dialog.header>`, `<x-dialog.footer>`, and `<x-dialog.description>` to organize and style your dialog as per your requirement.

Hope this dialog component makes your application pop and keeps your users delighted! 🚀