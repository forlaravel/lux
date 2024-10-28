<?php

declare(strict_types=1);

namespace Lux\Console;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

use function Laravel\Prompts\info;
use function Laravel\Prompts\warning;
use function Laravel\Prompts\confirm;
use function Laravel\Prompts\multisearch;
use function Lux\fs;
use function Laravel\Prompts\note;
use function Laravel\Prompts\select;

class PublishCommand extends Command
{
    protected $signature = 'lux:publish {components?*} {--link} {--all} {--reverse}';
    protected $description = 'Publish lux components.';

    protected Filesystem $fs;

    public function handle(Filesystem $fs): void
    {
        $this->fs = $fs;

        $components = collect($this->argument('components'))->map(fn($x) => strtolower($x));
        $allComponents = collect($this->fs->directories(\Lux\LUX_DIR . '/components'))->map(fn($x) => basename($x));

        if ($this->option('all')) {
            $components = $allComponents;
        }

        // Search for components if none are provided
        if ($components->isEmpty()) {
            $components = collect(multisearch('Search for components to publish:', fn($x) => $allComponents->filter(fn($y) => str_contains($y, $x))->values()->toArray()));
        }

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

        $this->fs->ensureDirectoryExists(resource_path('views/' . $componentsDirectory));

        $sourceDirectory = \Lux\LUX_DIR .'/components/' . $component;

        $targetDirectory = resource_path('views/' . $componentsDirectory . '/' . $component);

        if ($this->fs->isDirectory($sourceDirectory)) {
            if ($this->option('link')) {
                return $this->linkDirectory($component, $sourceDirectory, $targetDirectory);
            } else {
                return $this->publishDirectory($component, $sourceDirectory, $targetDirectory);
            }
        }

        return null;
    }

    protected function linkDirectory($component, $source, $target): null|string|bool
    {
        if ($this->fs->exists($target)) {
            warning("Directory already exists: {$target}");

            if (! $this->askBeforeOverwrite("Do you want to remove the directory and link it instead?")) {
                return false;
            }

            if (is_link($target)) {
                $this->fs->delete($target);
            } else {
                $this->fs->deleteDirectory($target);
            }
        }

        $this->fs->link($source, $target);

        return $target;
    }

    protected function publishDirectory($component, $source, $target): null|string|bool
    {
        // Check if target is a symlink
        if (is_link($target)) {
            warning("Directory is linked: {$target}");

            if (! $this->askBeforeOverwrite("Do you want to unlink the directory?")) {
                return false;
            }

            // Remove link
            $this->fs->delete($target);
        }
        
        $this->fs->ensureDirectoryExists($target);

        $files = $this->fs->allFiles($source);

        foreach ($files as $file) {
            $relativePath = $file->getRelativePathname();
            $targetPath = $target . '/' . $relativePath;

            if ($this->fs->exists($targetPath)) {
                if (! $this->askBeforeOverwrite("$relativePath allready exists. Do you want to overwrite?")) {
                    continue;
                }
            }

            $this->fs->copy($file->getPathname(), $targetPath);
        }

        return $target;
    }

    protected $rememberOverwrite = null;

    protected function askBeforeOverwrite($message) {
        if (is_bool($this->rememberOverwrite)) return $this->rememberOverwrite;

        $answer = select($message, ['Yes', 'No', 'All', 'None'], 'Yes');

        if ($answer === 'All') {
            $this->rememberOverwrite = true;
            return true;
        }

        if ($answer === 'None') {
            $this->rememberOverwrite = false;
            return false;
        }

        return $answer === 'Yes';
    }

    protected function createLuxService()
    {
        $sourceFile = \Lux\LUX_DIR .'/src/Lux.php';
        $targetFile = app_path('Support/LuxService.php');

        // Make sure the directory exists
        $this->fs->ensureDirectoryExists(app_path('Support'));

        $this->fs->copy($sourceFile, $targetFile);

        // Replace namespace in file contents
        $contents = $this->fs->get($targetFile);
        $contents = str_replace('namespace Lux;', 'namespace App\Support;', $contents);
        $this->fs->put($targetFile, $contents);

        note('Lux service created successfully.');
        note('Add the following to your app service providers register method:');
        note('    $this->app->singleton(App\Support\Lux::class, App\Support\Lux::class);');
        note('    $this->app->alias(App\Support\Lux::class, \'lux\');');
        note('    $this->mergeConfigFrom(app_path(\'config/lux.php\'), \'lux\');');
    }
}