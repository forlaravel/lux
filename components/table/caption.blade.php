@blaze
@props(['tag' => 'caption'])
<{{ $tag }} {{ $attributes->merge(['class' => 'lux-table-caption']) }}>{{ $slot }}</{{ $tag }}>
