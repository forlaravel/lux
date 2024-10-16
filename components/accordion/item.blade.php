@props([
    'tag' => 'div'
])

<{{ $tag}}  
@mergeAttributes
    x-id="['accordion-item', 'accordion-trigger', 'accordion-content']"
    :id="$id('accordion-item')"
    :aria-labelledby="$id('accordion-trigger')"
    class="border-b" 
    role="region"
@endMergeAttributes
>
    {{ $slot }}
</{{ $tag}} >
