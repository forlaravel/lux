# Dark Mode
Add the `dark` class to the `<html>` tag to enable dark mode styles on all components.

## Toggle Button
To let users switch between light and dark mode, first add the `x-darkmode` Alpine directive to the html tag:
```html
<html x-data x-darkmode ...>
```

This remembers the user's preference and applies dark mode automatically.

Then create a button that toggles the dark class:
```html
<x-button variant="ghost" x-on:click="darkMode = !darkMode">
    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"> <path d="M10 3C13.866 3 17 6.13401 17 10C17 13.866 13.866 17 10 17V3ZM10 2C5.58172 2 2 5.58172 2 10C2 14.4183 5.58172 18 10 18C14.4183 18 18 14.4183 18 10C18 5.58172 14.4183 2 10 2Z"/> </svg> 
</x-button>
```

The toggle button at the top of this page uses the same approach.
