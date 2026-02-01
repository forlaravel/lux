@blaze
@props(['tag' => 'nav'])
<{{ $tag }}
    x-data="{
        activeItem: null,
        _leaveTimeout: null,
        showItem(id) { clearTimeout(this._leaveTimeout); this.activeItem = id; },
        hideItem() { this._leaveTimeout = setTimeout(() => { this.activeItem = null; }, 100); },
    }"
    {{ $attributes->mergeTailwind(['class' => 'lux-navigation-menu']) }}
>{{ $slot }}</{{ $tag }}>
