<html
@mergeAttributes
lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    x-data
    x-darkmode
    class="{{ array_key_exists('darkMode', request()->cookie()) ? 'dark' : '' }}"
@endMergeAttributes
>
{{ $slot }}
</html>