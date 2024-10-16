# Card
A versatile container component used for grouping related content, such as forms, text, or media.

## Example
```html
<x-card class="w-[350px]">
    <x-card.header>
        <x-card.title>Create project</x-card.title>
        <x-card.description>Deploy your new project in one-click.</x-card.description>
    </x-card.header>

    <x-card.content>
        <form>
            <div class="grid w-full items-center gap-4">
                <div class="flex flex-col space-y-1.5">
                    <x-label for="project">Name</x-label>
                    <x-input id="project" placeholder="Name of your project" />
                </div>
                <div class="flex flex-col space-y-1.5">
                    <x-label for="framework">Framework</x-label>
                    <div>
                        <x-select selected="next" id="framework">
                            <x-select.trigger>
                                <x-select.value placeholder="Select" />
                            </x-select.trigger>
                            <x-select.content>
                                <x-select.label>Select a framework</x-select.label>
                                <x-select.item value="next">Next.js</x-select.item>
                                <x-select.item value="sveltekit">Svelte</x-select.item>
                                <x-select.item value="astro">Astro</x-select.item>
                                <x-select.item value="nuxt">Nuxt.js</x-select.item>
                            </x-select.content>
                        </x-select>
                    </div>
                </div>
            </div>
        </form>
    </x-card.content>

    <x-card.footer class="flex justify-between">
        <x-button variant="outline">Cancel</x-button>
        <x-button>Deploy</x-button>
    </x-card.footer>
</x-card>
```

## Installation

1. Run the following command to publish the card component:

```bash
php artisan lux:publish card
```

2. Ensure your Tailwind CSS configuration includes necessary utility classes for borders, padding, spacing, and shadows.

## Properties

### x-card
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `class` | Additional Tailwind CSS classes for customizing the card container. | `string` | `rounded-lg border bg-card text-card-foreground shadow-sm` |

### x-card.header
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `class` | Additional Tailwind CSS classes for customizing the card header. | `string` | `flex flex-col space-y-1.5 p-6` |

### x-card.title
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `class` | Additional Tailwind CSS classes for customizing the card title. | `string` | `text-2xl font-semibold leading-none tracking-tight` |

### x-card.description
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `class` | Additional Tailwind CSS classes for customizing the card description. | `string` | `text-sm text-muted-foreground` |

### x-card.content
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `class` | Additional Tailwind CSS classes for customizing the card content area. | `string` | `p-6` |

### x-card.footer
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `class` | Additional Tailwind CSS classes for customizing the card footer. | `string` | `flex items-center p-6 pt-0` |