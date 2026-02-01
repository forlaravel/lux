@blaze
@props(['tag' => 'div', 'orientation' => 'vertical'])
<{{ $tag }} {{ $attributes->merge(['class' => "lux-field lux-field-{$orientation}"]) }}>{{ $slot }}</{{ $tag }}>
