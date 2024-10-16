@props([
    'language' => '',
    'normalizeIndentation' => true,
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

<div {{ $attributes->merge(['class' => "relative bg-zinc-950 dark:bg-zinc-900 text-white rounded-md p-4 overflow-hidden"]) }} x-data="{ code: @js($code), copied: false }">
    <x-button variant="ghost" x-on:click="navigator.clipboard.writeText(code); copied = true; setTimeout(() => copied = false, 2000);" class="absolute top-2 right-2 text-xs px-2 py-1 rounded">
        <span x-show="!copied"> <svg class="w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19 3h-2.25a1 1 0 0 0-1-1h-7.5a1 1 0 0 0-1 1H5c-1.103 0-2 .897-2 2v15c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zm0 17H5V5h2v2h10V5h2v15z"/></svg> </span>
        <span x-show="copied" x-cloak> <svg class="w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg></span>
    </x-button>
    <pre class="overflow-x-auto"><code class="language-{{ $language }} relative rounded px-[0.3rem] py-[0.2rem] font-mono text-sm">{!! htmlentities($code) !!}</code></pre>
</div>
