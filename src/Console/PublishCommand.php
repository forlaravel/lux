<?php

declare(strict_types=1);

namespace Lux\Console;

use Illuminate\Console\Command;

use function Laravel\Prompts\info;
use function Laravel\Prompts\warning;
use function Laravel\Prompts\confirm;
use function Laravel\Prompts\multisearch;
use function Lux\fs;
use function Laravel\Prompts\note;

class PublishCommand extends Command
{
    protected $signature = 'lux:publish {components?*} {--link} {--all} {--reverse}';
    protected $description = 'Publish lux components.';

    public function handle(): void
    {
        $components = collect($this->argument('components'))->map(fn($x) => strtolower($x));
        $allComponents = collect(fs()->directories(\Lux\LUX_DIR . '/components'))->map(fn($x) => basename($x));

        if ($this->option('all')) {
            $components = $allComponents;
        }

        // Search for components if none are provided
        if ($components->isEmpty()) {
            $components = collect(multisearch('Search for components to publish:', fn($x) => $allComponents->filter(fn($y) => str_contains($y, $x))->values()->toArray()));
        }

        $this->ensureLuxService();

        foreach ($components as $component) {
            $target = $this->publish($component);

            if ($target === null) {
                warning('Component not found: ' . $component);
            } elseif ($target === false) {
                warning('Publishing cancelled: ' . $component);
            } else {
                if ($this->option('link')) {
                    info('Linked: ' . $target);
                } else {
                    info('Published: ' . $target);
                }

                note("Components {$component} published successfully.");
            }
        }
    }

    protected function publish(string $component): null|string|bool
    {
        $subdir = config('lux.subdir', '');
        $componentsDirectory = $subdir ? 'components/' . $subdir : 'components';

        fs()->ensureDirectoryExists(resource_path('views/' . $componentsDirectory));

        $sourceDirectory = \Lux\LUX_DIR .'/components/' . $component;
        $sourceFile = $sourceDirectory . '.blade.php';

        $targetDirectory = resource_path('views/' . $componentsDirectory . '/' . $component);
        $targetFile = $targetDirectory . '.blade.php';

        if (fs()->isDirectory($sourceDirectory)) {
            return $this->publishDirectory($component, $sourceDirectory, $targetDirectory);
        }

        if (fs()->isFile($sourceFile)) {
            return $this->publishFile($component, $sourceFile, $targetFile);
        }

        return null;
    }

    protected function publishDirectory($component, $source, $target): null|string|bool
    {
        if (fs()->exists($target)) {
            warning("Directory already exists: {$target}");

            if (! confirm('Do you want to overwrite it? The directory will be deleted.', default: false)) {
                return false;
            }
        }

        fs()->deleteDirectory($target);

        if ($this->option('link')) {
            fs()->link($source, $target);
        } else {
            fs()->copyDirectory($source, $target);
        }

        return $target;
    }

    protected function publishFile($component, $source, $target): null|string|bool
    {
        if (fs()->exists($target)) {
            warning("File already exists: {$target}");

            if (! confirm('Do you want to overwrite it?', default: false)) {
                return false;
            }
        }

        fs()->delete($target);

        if ($this->option('link')) {
            fs()->link($source, $target);
        } else {
            fs()->copy($source, $target);
        }

        return $target;
    }

    protected function ensureLuxService()
    {
        $sourceFile = \Lux\LUX_DIR .'/app/Services/LuxService.php';
        $targetFile = app_path('Services/LuxService.php');

        // Make sure the directory exists
        fs()->ensureDirectoryExists(app_path('Services'));

        fs()->copy($sourceFile, $targetFile);
    }
}