# Table
A responsive table component with styled sub-components.

## Example
```html
<x-table>
    <x-table.caption>A list of your recent invoices.</x-table.caption>
    <x-table.header>
        <x-table.row>
            <x-table.head class="w-[100px]">Invoice</x-table.head>
            <x-table.head>Status</x-table.head>
            <x-table.head>Method</x-table.head>
            <x-table.head class="text-right">Amount</x-table.head>
        </x-table.row>
    </x-table.header>
    <x-table.body>
        <x-table.row>
            <x-table.cell class="font-medium">INV001</x-table.cell>
            <x-table.cell>Paid</x-table.cell>
            <x-table.cell>Credit Card</x-table.cell>
            <x-table.cell class="text-right">$250.00</x-table.cell>
        </x-table.row>
        <x-table.row>
            <x-table.cell class="font-medium">INV002</x-table.cell>
            <x-table.cell>Pending</x-table.cell>
            <x-table.cell>PayPal</x-table.cell>
            <x-table.cell class="text-right">$150.00</x-table.cell>
        </x-table.row>
    </x-table.body>
    <x-table.footer>
        <x-table.row>
            <x-table.cell colspan="3">Total</x-table.cell>
            <x-table.cell class="text-right">$400.00</x-table.cell>
        </x-table.row>
    </x-table.footer>
</x-table>
```

## Example
### Striped Rows
Add the `lux-table-striped` class to the table for alternating row backgrounds.
```html
<x-table class="lux-table-striped">
    <x-table.header>
        <x-table.row>
            <x-table.head>Name</x-table.head>
            <x-table.head>Email</x-table.head>
        </x-table.row>
    </x-table.header>
    <x-table.body>
        <x-table.row>
            <x-table.cell>Alice</x-table.cell>
            <x-table.cell>alice@example.com</x-table.cell>
        </x-table.row>
        <x-table.row>
            <x-table.cell>Bob</x-table.cell>
            <x-table.cell>bob@example.com</x-table.cell>
        </x-table.row>
        <x-table.row>
            <x-table.cell>Charlie</x-table.cell>
            <x-table.cell>charlie@example.com</x-table.cell>
        </x-table.row>
        <x-table.row>
            <x-table.cell>Diana</x-table.cell>
            <x-table.cell>diana@example.com</x-table.cell>
        </x-table.row>
    </x-table.body>
</x-table>
```

## Example
### Sticky Header
Add the `lux-table-header-sticky` class to the header for a sticky header that stays visible when scrolling.
```html
<div class="h-48 overflow-auto rounded-md border">
    <x-table>
        <x-table.header class="lux-table-header-sticky">
            <x-table.row>
                <x-table.head>Name</x-table.head>
                <x-table.head>Role</x-table.head>
            </x-table.row>
        </x-table.header>
        <x-table.body>
            @foreach(range(1, 20) as $i)
            <x-table.row>
                <x-table.cell>User {{ $i }}</x-table.cell>
                <x-table.cell>Role {{ $i }}</x-table.cell>
            </x-table.row>
            @endforeach
        </x-table.body>
    </x-table>
</div>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish table
```

## Properties

### table
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | Container HTML tag | `string` | `div` |

### table.header
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `thead` |

### table.body
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `tbody` |

### table.row
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `tr` |

### table.head
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `th` |

### table.cell
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `td` |

### table.caption
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `caption` |

### table.footer
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `tfoot` |
