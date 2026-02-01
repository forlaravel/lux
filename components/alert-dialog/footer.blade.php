@blaze
@props(['tag' => 'div'])

<{{ $tag }} {{ $attributes->merge(['class' => 'lux-alert-dialog-footer']) }}>{{ $slot }}</{{ $tag }}>
