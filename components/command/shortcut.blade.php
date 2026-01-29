@blaze
<!-- resources/views/components/command-shortcut.blade.php -->
<span 
    {{ $attributes->mergeTailwind(['class' => 'lux-command-shortcut']) }}
>
    {{ $slot }}
</span>
