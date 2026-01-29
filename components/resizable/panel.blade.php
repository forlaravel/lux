@blaze
@props(['tag' => 'div', 'defaultSize' => null, 'minSize' => null])
<{{ $tag }}
    x-init="registerPanel($el, { size: {{ $defaultSize ?? 'null' }}, minSize: {{ $minSize ?? 50 }} })"
    :style="panels.find(p => p.el === $el)?.size ? 'flex-basis:' + panels.find(p => p.el === $el).size + '%' : ''"
    {{ $attributes->mergeTailwind(['class' => 'lux-resizable-panel']) }}
>{{ $slot }}</{{ $tag }}>
