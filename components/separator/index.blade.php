@props([
    'orientation' => 'horizontal',
    'tag' => 'div',
])

<{{ $tag }}
    role="none"
    data-orientation="{{ $orientation }}"
    {{ $attributes->classTailwind([
        'shrink-0 bg-border',
        'h-full w-[1px]' => $orientation === 'vertical',
        'h-[1px] w-full my-4' => $orientation === 'horizontal',
    ]) }}
></{{ $tag }}>
