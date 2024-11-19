## Publishing Components
Once Lux is installed, you can publish components to your Laravel project by running the following command:

```bash
php artisan lux:publish
```

```
 ┌ Search for components to publish: ───────────────────────────┐
 │ b                                                            │
 ├──────────────────────────────────────────────────────────────┤
 │   ◼ badge                                                  ┃ │
 │   ◻ breadcrumb                                             │ │
 │   ◻ button                                                 │ │
 │   ◻ checkbox                                               │ │
 │   ◻ code-block                                             │ │
 └────────────────────────────────────────────────── 1 selected ┘
```

## Publishing a single component separately
```bash
php artisan lux:publish badge
```

## Publish all components
```bash
php artisan lux:publish --all
```