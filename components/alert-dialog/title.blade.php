@blaze
@props(['tag' => 'h2'])

<{{ $tag }} :id="$id('alert-dialog-title')" {{ $attributes->merge(['class' => 'lux-alert-dialog-title']) }}>{{ $slot }}</{{ $tag }}>
