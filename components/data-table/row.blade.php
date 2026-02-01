@blaze
@props(['rowId' => null])
<tr class="lux-data-table-row" {{ $rowId !== null ? ':class="{ \'bg-muted/50\': isSelected(' . $rowId . ') }"' : '' }} data-row-id="{{ $rowId }}">
    {{ $slot }}
</tr>
