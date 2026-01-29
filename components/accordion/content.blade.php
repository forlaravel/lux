@blaze
@props([
    'tag' => 'div'
])

@aware([
    'animated' => true
])

<{{ $tag }}
    :id="$id('accordion-content')"
    :aria-labelledby="$id('accordion-trigger')"
    x-show="isSelected($id('accordion-item'))"
    x-cloak
    @if($animated)
    x-collapse
    @endif
    class="lux-accordion-content"
    role="region"
>
    <div {{ $attributes->mergeTailwind(['class' => 'lux-accordion-content-inner']) }}>
        {{ $slot }}
    </div>
</{{ $tag }}>
