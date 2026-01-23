<div {{ $attributes->mergeTailwind(['class' => 'lux-data-table w-full']) }} x-data="{ filter: '', sort: '', selectedRows: [] }">
    {{ $slot }}
</div>