@props([
    'tag' => 'textarea',
    'type' => 'text',
])

@open($tag)
    type="{{ $type }}"
    x-data="{ value: @wireOr((string) $slot, handlePersist: true)}"
    x-model="value"
    autocomplete="off"
    class="flex min-h-[80px] w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 focus:border-input"
@content
    {{ $slot }}
@close
