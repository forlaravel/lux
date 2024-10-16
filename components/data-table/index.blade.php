<div {{ $attributes->merge(['class' => 'w-full']) }} x-data="{ filter: '', sort: '', selectedRows: [] }">
    {{ $slot }}
</div>