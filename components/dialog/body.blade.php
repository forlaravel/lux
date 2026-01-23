@props([
    'tag' => 'div',
])

<div {{ $attributes->mergeTailwind(['class' => 'lux-dialog-body overflow-y-auto max-h-[calc(100dvh-16rem)]']) }}>
    {{ $slot }}
</div>
