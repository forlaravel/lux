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