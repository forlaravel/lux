<!-- resources/views/components/command-list.blade.php -->
<div 
    {{ $attributes->mergeTailwind(['class' => 'lux-command-list']) }}
    x-ref="list"
>
    {{ $slot }}
</div>
