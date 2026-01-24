<div {{ $attributes->mergeTailwind(['class' => 'lux-data-table']) }} x-data="{ filter: '', sort: '', selectedRows: [] }">
    {{ $slot }}
</div>
