# Theming

Lux uses Tailwind CSS v4's new `@theme` block syntax for theming. This allows you to define custom design tokens directly in your CSS.

## Basic Theme Configuration

In your main CSS file (typically `app.css`), define your theme using the `@theme` block:

```css
@import "tailwindcss";

@theme {
  --color-primary: oklch(0.205 0 0);
  --color-primary-foreground: oklch(0.985 0 0);
  --color-secondary: oklch(0.97 0 0);
  --color-secondary-foreground: oklch(0.205 0 0);
  --color-background: oklch(1 0 0);
  --color-foreground: oklch(0.145 0 0);
  --color-border: oklch(0.922 0 0);
  --color-ring: oklch(0.708 0 0);

  --radius: 0.65rem;
}
```

## Dark Mode Theming

For dark mode, define overrides outside the `@theme` block using the `.dark` selector:

```css
.dark {
  --color-background: oklch(0.145 0 0);
  --color-foreground: oklch(0.985 0 0);
  --color-primary: oklch(0.922 0 0);
  --color-primary-foreground: oklch(0.205 0 0);
  --color-secondary: oklch(0.269 0 0);
  --color-secondary-foreground: oklch(0.985 0 0);
  --color-border: oklch(1 0 0 / 10%);
  --color-ring: oklch(0.556 0 0);
}
```

## Using Theme Variables

Once defined, you can use these variables in your Lux components. The components automatically pick up the custom properties:

```html
<div class="bg-background text-foreground border-border">
  Content styled with theme variables
</div>
```

## Customizing Component Colors

Extend the theme with additional semantic color tokens:

```css
@theme {
  --color-accent: oklch(0.97 0 0);
  --color-accent-foreground: oklch(0.205 0 0);
  --color-destructive: oklch(0.577 0.245 27.325);
  --color-destructive-foreground: oklch(0.985 0 0);
  --color-muted: oklch(0.97 0 0);
  --color-muted-foreground: oklch(0.556 0 0);
}
```

## Best Practices

- Define all base theme variables in the `@theme` block
- Use the `.dark` selector for dark mode overrides only
- Use semantic color names (e.g., `primary`, `destructive`) rather than appearance-based names
- Test your theme in both light and dark modes
- Consider contrast ratios for accessibility

For more on Tailwind CSS v4 theming, see the [official Tailwind CSS documentation](https://tailwindcss.com/docs).