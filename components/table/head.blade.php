@blaze
@props(['tag' => 'th'])
<{{ $tag }} scope="col" {{ $attributes->merge(['class' => 'lux-table-head']) }}>{{ $slot }}</{{ $tag }}>
