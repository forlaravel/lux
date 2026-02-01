@blaze
@props(['tag' => 'tbody'])
<{{ $tag }} {{ $attributes->merge(['class' => 'lux-table-body']) }}>{{ $slot }}</{{ $tag }}>
