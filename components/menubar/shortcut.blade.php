@blaze
@props(['tag' => 'span'])
<{{ $tag }} {{ $attributes->merge(['class' => 'lux-menubar-shortcut']) }}>{{ $slot }}</{{ $tag }}>
