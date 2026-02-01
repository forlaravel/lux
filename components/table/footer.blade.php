@blaze
@props(['tag' => 'tfoot'])
<{{ $tag }} {{ $attributes->merge(['class' => 'lux-table-footer']) }}>{{ $slot }}</{{ $tag }}>
