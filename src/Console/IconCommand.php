<?php

declare(strict_types=1);

namespace Lux\Console;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

use function Laravel\Prompts\text;
use function Laravel\Prompts\textarea;
use function Laravel\Prompts\info;
use function Laravel\Prompts\confirm;
use function Laravel\Prompts\warning;
use function Laravel\Prompts\note;

class IconCommand extends Command
{
    protected $signature = 'lux:icon';
    protected $description = 'Import a svg icon';

    protected Filesystem $fs;

    public function handle(Filesystem $fs): void
    {
        $this->fs = $fs;

        $name = text(
            label: 'What is the name of the icon?',
            placeholder: 'settings',
            required: true,
            validate: function ($value) {
                if (empty($value)) {
                    return 'Icon name is required.';
                }
                if (!preg_match('/^[a-z0-9-]+$/', $value)) {
                    return 'Icon name must contain only lowercase letters, numbers, and hyphens.';
                }
                return null;
            }
        );

        $svg = textarea(
            label: 'Paste the SVG content:',
            placeholder: '<svg>...</svg>',
            required: true,
            validate: function ($value) {
                if (empty($value)) {
                    return 'SVG content is required.';
                }
                if (!str_contains($value, '<svg')) {
                    return 'Invalid SVG content. Must contain an <svg> tag.';
                }
                return null;
            }
        );

        // Transform the SVG to add @mergeAttributes directives
        $transformedSvg = $this->transformSvg(trim($svg));

        $targetDirectory = resource_path('views/components/icon');
        $targetFile = $targetDirectory . '/' . $name . '.blade.php';

        $this->fs->ensureDirectoryExists($targetDirectory);

        if ($this->fs->exists($targetFile)) {
            warning("Icon already exists: {$targetFile}");

            if (!confirm('Do you want to overwrite it?')) {
                return;
            }
        }

        $this->fs->put($targetFile, $transformedSvg);

        info("Icon saved: {$targetFile}");
        note("Icon '{$name}' created successfully. You can use it with <x-icon.{$name} />");
    }

    protected function transformSvg(string $svg): string
    {
        // Match the opening <svg tag with all its attributes
        $pattern = '/(<svg)(\s*)([^>]*)(>)/s';

        $replacement = '@open(\'svg\')' . PHP_EOL . '    $3' . PHP_EOL . '@content' . PHP_EOL;

        return str_replace("</svg>", PHP_EOL."@close", preg_replace($pattern, $replacement, $svg, 1));
    }
}