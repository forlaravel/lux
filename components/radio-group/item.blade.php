@blaze
@props(['tag' => 'button', 'value', 'id' => null, 'disabled' => false])
<{{ $tag }}
    type="button" role="radio"
    x-on:click="selected = @js($value)"
    :aria-checked="(selected === @js($value)).toString()"
    :data-checked="(selected === @js($value)).toString()"
    @if($id) id="{{ $id }}" @endif
    @disabled($disabled)
    {{ $attributes->mergeTailwind(['class' => 'lux-radio-group-item']) }}
>
    <span class="lux-radio-group-indicator" x-show="selected === @js($value)" x-cloak>
        <svg class="lux-radio-group-indicator-dot" viewBox="0 0 8 8"><circle cx="4" cy="4" r="4" fill="currentColor"/></svg>
    </span>
</{{ $tag }}>
