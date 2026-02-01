@blaze
@props(['tag' => 'div', 'orientation' => 'horizontal'])
<{{ $tag }} {{ $attributes->merge(['class' => 'lux-button-group' . ($orientation === 'vertical' ? ' lux-button-group-vertical' : '')]) }}>{{ $slot }}</{{ $tag }}>
