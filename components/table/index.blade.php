@blaze
@props(['tag' => 'div'])
<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-table-container']) }}>
    <table class="lux-table">
        {{ $slot }}
    </table>
</{{ $tag }}>
