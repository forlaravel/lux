# Dialog

Welcome to the fantastical world of the Dialog component! This little buddy is here to help you create beautiful, interactive dialog modals with ease. Perfect for when you need to show off some content and want to keep your users engaged. 🪄

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
            <x-dialog.close>
                <x-button tag="span" variant="ghost">Close</x-button>    
            </x-dialog.close>
            <x-button>Save Changes</x-button>
        </x-dialog.footer>
    </x-dialog.content>
</x-dialog>
<br>
<x-dialog>
    <x-dialog.trigger>
        <x-button variant="outline" tag="span">Open FAQ</x-button>    
    </x-dialog.trigger>

    <x-dialog.content>
        <x-dialog.header>
            <x-dialog.title>Notice</x-dialog.title>
        </x-dialog.header>

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

        <x-dialog.footer>
            <x-dialog.close>
                <x-button tag="span" variant="ghost">Close</x-button>    
            </x-dialog.close>
            <x-button>Save Changes</x-button>
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

### dialog
| Prop            | Description                                                  | Type      | Default |
|-----------------|--------------------------------------------------------------|-----------|---------|
| `tag`           | The HTML tag to use for the dialog container element.        | `string`  | `div`   |
| `open`          | Determines if the dialog is open on initial render.          | `boolean` | `false` |

### dialog.header
| Prop            | Description                                                  | Type      | Default |
|-----------------|--------------------------------------------------------------|-----------|---------|
| `tag`           | The HTML tag to use for the header container element.        | `string`  | `div`   |

### dialog.title
| Prop   | Description                                        | Type     | Default |
|--------|----------------------------------------------------|----------|---------|
| `tag`  | The HTML tag to use for the title element.         | `string` | `h2`    |

### dialog.description
| Prop   | Description                                        | Type     | Default |
|--------|----------------------------------------------------|----------|---------|
| `tag`  | The HTML tag to use for the description element.   | `string` | `p`     |

### dialog.footer
| Prop   | Description                                        | Type     | Default |
|--------|----------------------------------------------------|----------|---------|
| `tag`  | The HTML tag to use for the footer container.      | `string` | `div`   |

### dialog.close
| Prop   | Description                                        | Type     | Default |
|--------|----------------------------------------------------|----------|---------|
| `tag`  | The HTML tag to use for the close button element.  | `string` | `button` |

### dialog.trigger
| Prop   | Description                                        | Type     | Default |
|--------|----------------------------------------------------|----------|---------|
| `tag`  | The HTML tag to use for the trigger element.       | `string` | `button` |

And there you have it! The merry-making, always-flexible Dialog component. Enjoy crafting modals that are as dynamic as your creativity allows! 🎉