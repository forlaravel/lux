# Data Table: Actions
A component used to manage and interact with data table actions, including filtering and displaying columns.

## Example
```html
@php
    $rows = [
        (object) ['id' => 1, 'status' => 'pending', 'email' => 'test@example.com', 'amount' => 100],
        (object) ['id' => 2, 'status' => 'completed', 'email' => 'test2@example.com', 'amount' => 200],
        ];
    $selectedRows = [$rows[0]->id];
    $totalRows = 2;
    $hasPreviousPage = true;
    $hasNextPage = true;
@endphp
<x-data-table>
    <x-data-table.actions />
    <x-data-table.header>
        <x-data-table.cell>
            <button type="button" class="peer h-4 w-4 shrink-0 rounded-sm border border-primary ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2">
                <span class="sr-only">Select all</span>
            </button>
        </x-data-table.cell>
        <x-data-table.cell>Status</x-data-table.cell>
        <x-data-table.cell>
            <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
                Email
                <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m21 16-4 4-4-4"></path>
                    <path d="M17 20V4"></path>
                    <path d="m3 8 4-4 4 4"></path>
                    <path d="M7 4v16"></path>
                </svg>
            </button>
        </x-data-table.cell>
        <x-data-table.cell class="text-right">Amount</x-data-table.cell>
        <x-data-table.cell></x-data-table.cell>
    </x-data-table.header>
    <x-data-table.body>
        @foreach($rows as $row)
            <x-data-table.row :row-id="$row->id">
                <x-data-table.cell>
                    <button type="button" class="peer h-4 w-4 shrink-0 rounded-sm border border-primary ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2" aria-label="Select row">
                        <span class="sr-only">Select row</span>
                    </button>
                </x-data-table.cell>
                <x-data-table.cell class="capitalize">{{ $row->status }}</x-data-table.cell>
                <x-data-table.cell class="lowercase">{{ $row->email }}</x-data-table.cell>
                <x-data-table.cell class="text-right font-medium">${{ $row->amount }}</x-data-table.cell>
                <x-data-table.cell>
                    <button type="button" class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 hover:bg-accent hover:text-accent-foreground h-8 w-8 p-0">
                        <span class="sr-only">Open menu</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="lucide lucide-ellipsis h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="1"></circle>
                            <circle cx="19" cy="12" r="1"></circle>
                            <circle cx="5" cy="12" r="1"></circle>
                        </svg>
                    </button>
                </x-data-table.cell>
            </x-data-table.row>
        @endforeach
    </x-data-table.body>
    <x-data-table.footer :selected-rows="$selectedRows" :total-rows="$totalRows" :has-previous-page="$hasPreviousPage" :has-next-page="$hasNextPage" />
</x-data-table>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish data-table
```

## Properties

### data-table.actions
| Prop      | Description                                                                 | Type     | Default |
|-----------|-----------------------------------------------------------------------------|----------|---------|
| `filter`  | Two-way bound property to filter the data table based on user input.        | `string` | `''`    |
| `trigger` | Triggers the display of columns which can be toggled on or off.             | `object` | `{}`    |

Embrace the power of organized data with ease using these nifty Data Table actions!

## Accessibility

- Wrap `<x-data-table.header>` and `<x-data-table.body>` inside a `<table>` element. The library does not render a `<table>` tag automatically.
- Use `<th scope="col">` elements instead of `<td>` for column headers so screen readers identify them as headings.
- Add a `<label>` or `aria-label` to the filter input so it has an accessible name.
- Icon-only buttons (sort toggles, row action menus) must have an `aria-label` or `sr-only` text describing their purpose.
- Add `aria-sort` attributes to sortable column headers to convey the current sort direction.