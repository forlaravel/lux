@blaze
@props(['tag' => 'div'])
<{{ $tag }} {{ $attributes->merge(['class' => 'lux-table-container']) }}>
    <table class="lux-table">
        {{ $slot }}
    </table>
</{{ $tag }}>
