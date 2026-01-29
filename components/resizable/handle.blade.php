@blaze
@props(['tag' => 'div', 'withHandle' => false])
<{{ $tag }}
    x-on:mousedown.prevent="startResize(panels.indexOf(panels.find(p => p.el === $el.previousElementSibling)), $event)"
    x-on:touchstart.prevent="startResize(panels.indexOf(panels.find(p => p.el === $el.previousElementSibling)), $event.touches[0])"
    role="separator"
    tabindex="0"
    :data-panel-group-direction="direction"
    {{ $attributes->mergeTailwind(['class' => 'lux-resizable-handle']) }}
>
    @if($withHandle)
        <div class="lux-resizable-handle-icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-2.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="12" r="1"/><circle cx="15" cy="12" r="1"/></svg>
        </div>
    @endif
</{{ $tag }}>
