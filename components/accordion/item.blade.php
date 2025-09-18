@props([
    'tag' => 'div'
])

@open($tag)
    x-id="['accordion-item', 'accordion-trigger', 'accordion-content']"
    :id="$id('accordion-item')"
    :aria-labelledby="$id('accordion-trigger')"
    class="border-b"
    role="region"
@content
    {{ $slot }}
@close
