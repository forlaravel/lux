@blaze
@props(['tag' => 'tr'])
<{{ $tag }} {{ $attributes->merge(['class' => 'lux-table-row']) }}>{{ $slot }}</{{ $tag }}>
