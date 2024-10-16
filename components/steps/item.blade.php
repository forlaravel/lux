<div {{ $attributes->merge(['class' => 'relative']) }}>
    <h3 data-step="{{ $step }}" class="relative pl-10 font-heading mt-8 scroll-m-20 text-md font-semibold tracking-tight before:content-[attr(data-step)] before:absolute before:inline-flex before:h-9 before:w-9 before:items-center before:justify-center before:rounded-full before:border-4 before:border-background before:bg-muted before:text-center before:font-mono before:text-base before:leading-6 before:font-medium before:absolute before:text-foreground before:ml-[-63px] before:mt-[-4px] before:text-primary">
        {{ $title }}
    </h3>
    <div class="pl-10">
        {{ $slot }}
    </div>
</div>
