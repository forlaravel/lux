# Installation
Install Lux via Composer:

```bash
composer require forlaravel/lux
```
## Node Dependencies
Install the required Alpine.js plugins and Tailwind CSS v4:

```bash
npm install @alpinejs/anchor @alpinejs/collapse @alpinejs/focus @alpinejs/persist @alpinejs/mask
npm install glob @tailwindcss/vite
```

Note: Lux requires Tailwind CSS v4 with `@tailwindcss/vite`.

## Publishing Components
Publish components to your project:

```bash
php artisan lux:publish {name?}
```

## Integrate JS/CSS Resources
Lux keeps `.js` and `.css` files close to the components. For example, the `button` component has a `button.css` file in the same folder as the blade file in `resources/views/components/button`.

To integrate the required resources dynamically into your project, follow these steps:

### Integrate the JavaScript
```javascript
import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';
...
const modules = import.meta.glob("../../resources/views/components/**/*.js", { eager: true });

for (const path in modules) {
    Alpine.plugin(modules[path].default);
}
```

### Integrate the CSS
Add this to your `vite.config.js`:
```javascript
...
import { globSync } from "glob";
import fs from "fs";

fs.writeFileSync(
    "resources/css/lux.css",
    globSync("resources/views/components/**/*.css")
        .map(path => `@import '../../${path}';`)
        .join('\n')
);

...
export default defineConfig(...)
```
This will create a `lux.css` file in your `resources/css` folder that you can import in your `app.css` file.

Add to the top of your app.css file:
```css
@import "tailwindcss";

@custom-variant dark (&:where(.dark, .dark *));

@theme {
   --radius: 0.65rem;
   --color-background: oklch(1 0 0);
   --color-foreground: oklch(0.145 0 0);
   --color-card: oklch(1 0 0);
   --color-card-foreground: oklch(0.145 0 0);
   --color-popover: oklch(1 0 0);
   --color-popover-foreground: oklch(0.145 0 0);
   --color-primary: oklch(0.205 0 0);
   --color-primary-foreground: oklch(0.985 0 0);
   --color-secondary: oklch(0.97 0 0);
   --color-secondary-foreground: oklch(0.205 0 0);
   --color-muted: oklch(0.97 0 0);
   --color-muted-foreground: oklch(0.556 0 0);
   --color-accent: oklch(0.97 0 0);
   --color-accent-foreground: oklch(0.205 0 0);
   --color-destructive: oklch(0.577 0.245 27.325);
   --color-destructive-foreground: oklch(0.985 0 0);
   --color-border: oklch(0.922 0 0);
   --color-input: oklch(0.922 0 0);
   --color-ring: oklch(0.708 0 0);
   --color-chart-1: oklch(0.646 0.222 41.116);
   --color-chart-2: oklch(0.6 0.118 184.704);
   --color-chart-3: oklch(0.398 0.07 227.392);
   --color-chart-4: oklch(0.828 0.189 84.429);
   --color-chart-5: oklch(0.769 0.188 70.08);

   --color-sidebar: oklch(0.985 0 0);
   --color-sidebar-foreground: oklch(0.145 0 0);
   --color-sidebar-primary: oklch(0.205 0 0);
   --color-sidebar-primary-foreground: oklch(0.985 0 0);
   --color-sidebar-accent: oklch(0.97 0 0);
   --color-sidebar-accent-foreground: oklch(0.205 0 0);
   --color-sidebar-border: oklch(0.922 0 0);
   --color-sidebar-ring: oklch(0.708 0 0);
 }
 
 .dark {
   --color-background: oklch(0.145 0 0);
   --color-foreground: oklch(0.985 0 0);
   --color-card: oklch(0.205 0 0);
   --color-card-foreground: oklch(0.985 0 0);
   --color-popover: oklch(0.205 0 0);
   --color-popover-foreground: oklch(0.985 0 0);
   --color-primary: oklch(0.922 0 0);
   --color-primary-foreground: oklch(0.205 0 0);
   --color-secondary: oklch(0.269 0 0);
   --color-secondary-foreground: oklch(0.985 0 0);
   --color-muted: oklch(0.269 0 0);
   --color-muted-foreground: oklch(0.708 0 0);
   --color-accent: oklch(0.269 0 0);
   --color-accent-foreground: oklch(0.985 0 0);
   --color-destructive: oklch(0.704 0.191 22.216);
   --color-destructive-foreground: oklch(0.985 0 0);
   --color-border: oklch(1 0 0 / 10%);
   --color-input: oklch(1 0 0 / 15%);
   --color-ring: oklch(0.556 0 0);
   --color-chart-1: oklch(0.488 0.243 264.376);
   --color-chart-2: oklch(0.696 0.17 162.48);
   --color-chart-3: oklch(0.769 0.188 70.08);
   --color-chart-4: oklch(0.627 0.265 303.9);
   --color-chart-5: oklch(0.645 0.246 16.439);
   --color-sidebar: oklch(0.205 0 0);
   --color-sidebar-foreground: oklch(0.985 0 0);
   --color-sidebar-primary: oklch(0.488 0.243 264.376);
   --color-sidebar-primary-foreground: oklch(0.985 0 0);
   --color-sidebar-accent: oklch(0.269 0 0);
   --color-sidebar-accent-foreground: oklch(0.985 0 0);
   --color-sidebar-border: oklch(1 0 0 / 10%);
   --color-sidebar-ring: oklch(0.556 0 0);
 }

...rest of the css file

@import './lux.css';
```

## Configuration
Publish the configuration file to customize Lux behavior:

```bash
php artisan vendor:publish --tag=lux-config
```
