@blaze
@props([
    'orientation' => 'horizontal',
    'tag' => 'div',
    'decorative' => true,
])

@php
$orientationClass = $orientation === 'vertical' ? 'lux-separator-vertical' : 'lux-separator-horizontal';
@endphp

<{{ $tag }}
    role="{{ $decorative ? 'none' : 'separator' }}"
    @if(!$decorative) aria-orientation="{{ $orientation }}" @endif
    data-orientation="{{ $orientation }}"
    {{ $attributes->mergeTailwind(['class' => "lux-separator $orientationClass"]) }}
></{{ $tag }}>
