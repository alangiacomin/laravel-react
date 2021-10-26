<?php

namespace Alangiacomin\LaravelReact;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelReactServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-react');
        // ->hasRoute('web');
        // ->hasConfigFile()
        // ->hasCommands([
        //     CreateCommand::class,
        //     CreateEvent::class,
        // ]);
    }

    public function packageBooted()
    {
        $this->publishes($this->publishableItems());
    }

    private function publishableItems(string $dir = null)
    {
        $publishableRoot = __DIR__ . '/../publishable';

        if (!isset($dir)) {
            $dir = $publishableRoot;
        }

        $list = [];
        foreach (scandir($dir) as $entry) {
            if (is_dir($dir . "/" . $entry)) {
                if ($entry != "." && $entry != "..") {
                    $list = array_merge($list, $this->publishableItems($dir . "/" . $entry));
                }
            } else {
                $list["$dir/$entry"] = base_path(str_replace("$publishableRoot/", "", "$dir/$entry"));
            }
        }

        return $list;
    }
}
