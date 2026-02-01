@blaze
<div {{ $attributes->mergeTailwind(['class' => 'lux-data-table']) }} x-data="{
    filter: '',
    sort: '',
    selectedRows: [],
    toggleRow(id) {
        const idx = this.selectedRows.indexOf(id);
        if (idx === -1) {
            this.selectedRows.push(id);
        } else {
            this.selectedRows.splice(idx, 1);
        }
    },
    selectAll(ids) {
        if (this.selectedRows.length === ids.length) {
            this.selectedRows = [];
        } else {
            this.selectedRows = [...ids];
        }
    },
    isSelected(id) {
        return this.selectedRows.includes(id);
    }
}">
    {{ $slot }}
</div>
