@blaze
@props(['tag' => 'span'])
<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-menubar-shortcut']) }}>{{ $slot }}</{{ $tag }}>
