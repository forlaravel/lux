@blaze
@props(['tag' => 'td'])
<{{ $tag }} {{ $attributes->merge(['class' => 'lux-table-cell']) }}>{{ $slot }}</{{ $tag }}>
