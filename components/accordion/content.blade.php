@props([
    'tag' => 'div'
])

@aware([
    'animated' => true
])

@open($tag)
    :id="$id('accordion-content')"
    :aria-labelledby="$id('accordion-trigger')"
    x-show="isSelected($id('accordion-item'))"
    x-cloak
    @if($animated)
    x-collapse
    @endif
    class="overflow-hidden text-sm"
    role="region"
@content
    <div {{ $attributes->merge(['class' => 'pb-4 pt-0']) }}>
        {{ $slot }}
    </div>
@close