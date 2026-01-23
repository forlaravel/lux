<!-- resources/views/components/command-shortcut.blade.php -->
<span 
    {{ $attributes->mergeTailwind(['class' => 'lux-command-shortcut ml-auto text-xs tracking-widest text-muted-foreground']) }}
>
    {{ $slot }}
</span>
