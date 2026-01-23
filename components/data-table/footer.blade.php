<div class="lux-data-table-footer flex items-center justify-end space-x-2 py-4">
    <div class="flex-1 text-sm text-muted-foreground">
        {{ count($selectedRows) }} of {{ $totalRows }} row(s) selected.
    </div>
    <div class="space-x-2">
        <button class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3" @click="previousPage" type="button">
            Previous
        </button>
        <button class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3" @click="nextPage" type="button">
            Next
        </button>
    </div>
</div>