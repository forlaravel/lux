# Carousel
A set of components used to create a carousel for displaying slides horizontally or vertically. This includes navigational buttons to move between slides.

## Example
```html
<x-carousel orientation="horizontal">
    <x-carousel.content>
            <x-carousel.item>
                <div class="p-1">
                    <x-card>
                        <x-card.content class="h-40 w-96 flex aspect-square items-center justify-center p-6">
                            <span class="text-4xl font-semibold">1</span>
                        </x-card.content>
                    </x-card>
                </div>
            </x-carousel.item>
            <x-carousel.item>
                <div class="p-1">
                    <x-card>
                        <x-card.content class="h-40 w-96 flex aspect-square items-center justify-center p-6">
                            <span class="text-4xl font-semibold">2</span>
                        </x-card.content>
                    </x-card>
                </div>
            </x-carousel.item>
    </x-carousel.content>
    <x-carousel.previous />
    <x-carousel.next />
</x-carousel>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish carousel
```



## Properties

### carousel
| Prop        | Description                                        | Type     | Default       |
|-------------|----------------------------------------------------|----------|---------------|
| `orientation` | Determines the direction of sliding; can be `horizontal` or `vertical` | `string` | `horizontal` |
| `opts`      | Additional options for customization               | `object` | `{}`          |

### carousel.content
| Prop        | Description                                        | Type     | Default       |
|-------------|----------------------------------------------------|----------|---------------|
| `orientation` | Determines the direction of sliding; can be `horizontal` or `vertical` | `string` | `horizontal` |

### carousel.item
| Prop        | Description                                        | Type     | Default       |
|-------------|----------------------------------------------------|----------|---------------|
| `orientation` | Determines the direction of sliding; can be `horizontal` or `vertical` | `string` | `horizontal` |

### carousel.previous & x-carousel.next
No additional props. These provide navigation control to move to the previous and next slides, respectively.