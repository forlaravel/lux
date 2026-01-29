@blaze
@props([
    'show' => false,
])

<div 
{{ $attributes->whereDoesntStartWith(['wire:model'])->class([
    'lux-window flex flex-col gap-4 z-10 fixed'
]) }}
x-window="{
    show: @wireOr($show),
    persist: @js($attributes->getWithModifiers('persist'))
}" 
x-data
x-trap="show"
x-modelable="show"
x-show="show"
x-cloak
wire:ignore.self 
style="width: 300px; height: 200px;"
>
    <div class="resize-handle top-left" style="cursor: nwse-resize; width: 10px; height: 10px; position: absolute; left: 0; top: 0;"></div>
    <div class="resize-handle top-right" style="cursor: nesw-resize; width: 10px; height: 10px; position: absolute; right: 0; top: 0;"></div>
    <div class="resize-handle bottom-left" style="cursor: nesw-resize; width: 10px; height: 10px; position: absolute; left: 0; bottom: 0;"></div>
    <div class="resize-handle bottom-right" style="cursor: nwse-resize; width: 10px; height: 10px; position: absolute; right: 0; bottom: 0;"></div>

    {{ $slot }}
</div>
