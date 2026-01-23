@inject('lux', 'lux')

<div 
{{ $attributes->classTailwind(["lux-window-title topbar flex justify-between items-center cursor-move border-b p-5 py-3 select-none"]) }}
>
    {{ $slot }}
    <x-dynamic-component :component="$lux->componentPath('button')" variant="ghost" x-on:click="close()" size="icon">
        <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg> 
    </x-dynamic-component>
</div>