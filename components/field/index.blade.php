@blaze
@props(['tag' => 'div', 'orientation' => 'vertical'])
<{{ $tag }} {{ $attributes->mergeTailwind(['class' => "lux-field lux-field-{$orientation}"]) }}>{{ $slot }}</{{ $tag }}>
