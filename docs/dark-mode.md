# Dark Mode
To enable dark mode in your Lux components, you can add the ``dark`` class to the body tag of your application. This will apply the dark mode styles to all components that support it.

## Add a toggle button
To allow users to switch between light and dark mode, you can create a toggle like this:

First, add the x-darkmode alpine directive to the html tag:
```html
<html x-data x-darkmode ...>
```

This will remember the user's preference and apply the dark mode styles accordingly.

Next, create a button that toggles the dark mode class on the body tag:
```html
<x-button variant="ghost" x-on:click="darkMode = !darkMode">
    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"> <path d="M10 3C13.866 3 17 6.13401 17 10C17 13.866 13.866 17 10 17V3ZM10 2C5.58172 2 2 5.58172 2 10C2 14.4183 5.58172 18 10 18C14.4183 18 18 14.4183 18 10C18 5.58172 14.4183 2 10 2Z"/> </svg> 
</x-button>
```

For a demo click the button on top of this page. It uses the same behavior as described above.

