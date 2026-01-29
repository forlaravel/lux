@blaze
@props([
    'tag' => 'div',
    'title' => null,
])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-sidebar-group']) }}>
    @if($title)
        <div class="lux-sidebar-group-title">{{ $title }}</div>
    @endif
    {{ $slot }}
</{{ $tag }}>
