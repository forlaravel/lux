@props([
    'orientation' => 'horizontal',
    'tag' => 'div',
])

@php
$orientationClass = $orientation === 'vertical' ? 'lux-separator-vertical' : 'lux-separator-horizontal';
@endphp

<{{ $tag }}
    role="none"
    data-orientation="{{ $orientation }}"
    {{ $attributes->mergeTailwind(['class' => "lux-separator $orientationClass"]) }}
></{{ $tag }}>
