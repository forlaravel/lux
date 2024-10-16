<tr class="border-b transition-colors hover:bg-muted/50" :class="{ 'bg-gray-100': selectedRows.includes({{ $rowId }}) }" @click="toggleRow({{ $rowId }})" x-data="{ selected: false }">
    {{ $slot }}
</tr>