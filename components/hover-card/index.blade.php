@blaze
@props(['tag' => 'div', 'openDelay' => 200, 'closeDelay' => 150])
<{{ $tag }}
    x-data="{
        show: false,
        openDelay: {{ $openDelay }},
        closeDelay: {{ $closeDelay }},
        _openTimeout: null,
        _closeTimeout: null,
        open() {
            clearTimeout(this._closeTimeout);
            this._openTimeout = setTimeout(() => { this.show = true; }, this.openDelay);
        },
        close() {
            clearTimeout(this._openTimeout);
            this._closeTimeout = setTimeout(() => { this.show = false; }, this.closeDelay);
        }
    }"
    x-id="['hover-card']"
    x-on:mouseenter="open()"
    x-on:mouseleave="close()"
    x-on:focus.capture="open()"
    x-on:blur.capture="close()"
    @keydown.escape="show = false"
    {{ $attributes->mergeTailwind(['class' => 'lux-hover-card']) }}
>{{ $slot }}</{{ $tag }}>
