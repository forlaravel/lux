<select 
@mergeAttributes
class="flex pr-5 w-full cursor-pointer items-center justify-between rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground
        focus:border-input
        focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2
        aria-pressed:ring-2 aria-pressed:ring-ring aria-pressed:ring-offset-2
        disabled:cursor-not-allowed disabled:opacity-50"
@endMergeAttributes>
{{ $slot }}
</select>