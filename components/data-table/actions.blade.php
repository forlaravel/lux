@blaze
@inject('lux', 'lux')

<div class="flex items-center py-4">
    <input x-model="filter" placeholder="Filter emails..." class="flex h-10 w-full max-w-sm rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
    <x-dynamic-component :component="$lux->componentPath('data-table.trigger')" class="ml-auto">
        Columns
    </x-dynamic-component>
</div>