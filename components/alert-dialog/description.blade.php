@blaze
@props(['tag' => 'p'])

<{{ $tag }} :id="$id('alert-dialog-description')" {{ $attributes->merge(['class' => 'lux-alert-dialog-description']) }}>{{ $slot }}</{{ $tag }}>
