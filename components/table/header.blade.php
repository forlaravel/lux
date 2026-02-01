@blaze
@props(['tag' => 'thead'])
<{{ $tag }} {{ $attributes->merge(['class' => 'lux-table-header']) }}>{{ $slot }}</{{ $tag }}>
