<!-- resources/views/components/command-list.blade.php -->
<div 
    {{ $attributes->merge(['class' => 'max-h-[300px] overflow-y-auto overflow-x-hidden']) }}
    x-ref="list"
>
    {{ $slot }}
</div>
