<div {{ $attributes->mergeTailwind(['class' => 'w-full']) }} x-data="{ filter: '', sort: '', selectedRows: [] }">
    {{ $slot }}
</div>