@props([
    'language' => '',
    'normalizeIndentation' => true,
    'copy' => false,
])

@php
    $normalizeIndentationFunc = function(string $code): string
    {
        // Split the code into lines
        $lines = explode("\n", trim($code));
        $lastLine = $lines[count($lines) - 1];

        // Count the number of leading spaces in the first line
        $leadingSpaces = strlen($lastLine) - strlen(ltrim($lastLine));

        // dd($leadingSpaces, $code, $lastLine, ltrim($lastLine));

        // Remove the leading spaces from all lines
        $lines = array_map(function ($line) use ($leadingSpaces) {
            // Check if the line has enough leading spaces to remove
            if (preg_match('/^\s{' . $leadingSpaces . '}/', $line)) {
                return substr($line, $leadingSpaces);
            }

            return $line;
        }, $lines);

        // Join the lines back together
        return implode("\n", $lines);
    };

    $code = $normalizeIndentation ? trim($normalizeIndentationFunc($slot)) : $slot;
@endphp

@inject('lux', 'lux')

<div {{ $attributes->mergeTailwind(['class' => "lux-code-block bg-accent text-accent-foreground rounded-md overflow-hidden"]) }}>
    @if($copy)
    <x-dynamic-component :component="$lux->componentPath('code-block.copy')" :text="$code" class="absolute top-3 right-3 z-10" variant="outline" />
    @endif

    <pre class="overflow-x-auto"><code class="language-{{ $language }} relative rounded px-[0.3rem] py-[0.2rem] font-mono text-[0.8rem] leading-[1rem]">{!! htmlentities($code) !!}</code></pre>
</div>
