<tr class="lux-data-table-row" :class="{ 'bg-gray-100': selectedRows.includes({{ $rowId }}) }" @click="toggleRow({{ $rowId }})" x-data="{ selected: false }">
    {{ $slot }}
</tr>
