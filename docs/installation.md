# Installation
To get started with Lux, you can install it via Composer by running the following command in your terminal:

```bash
composer require forlaravel/lux
```
## Node
You can install the required Alpine.js plugins by running the following command:

```bash
npm install @alpinejs/anchor @alpinejs/collapse @alpinejs/focus @alpinejs/persist @alpinejs/mask
```


## Publishing Components
Once Lux is installed, you can publish components to your Laravel project by running the following command:

```bash
php artisan lux:publish {name?}
```

This will copy the necessary files to your project, allowing you to start using Lux components right away.

## Integrate js/css resources
Lux keeps ``.js`` and ``.css`` files closely the the components. For example the ``button`` component has a ``button.css`` file in the same folder as the blade file in ```resources/views/components/button```. 

To integrate the required javascript and css resources dynamically into your project you can use the following steps:

## Integrate the javascript into your project
```javascript
import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';
...
const modules = import.meta.glob("../../resources/views/components/**/*.js", { eager: true });

for (const path in modules) {
    Alpine.plugin(modules[path].default);
}
```

## Integrate the css into your project
Add this to your vite.condig.js:
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
This wil create a lux.css file in your resources/css folder that you can import in your app.css file.

Add to the of your app.css file:
```css
@import './lux.css';

...rest of the css file
```


## Configuration
Lux provides a configuration file that allows you to customize the behavior of the package. You can publish the configuration file by running the following command:

```bash
php artisan vendor:publish --tag=lux-config
```

