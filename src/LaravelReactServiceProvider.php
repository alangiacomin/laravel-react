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
        $this->publishes([
            __DIR__ . '/../publishable/app/Http/Controllers/HomeController.php' => app_path('Http/Controllers/HomeController.php'),
            __DIR__ . '/../publishable/routes/web.php' => base_path('routes/web.php'),
            __DIR__ . '/../publishable/resources/views/home.blade.php' => base_path('resources/views/home.blade.php'),
            __DIR__ . '/../publishable/package.json' => base_path('package.json'),
            __DIR__ . '/../publishable/webpack.mix.js' => base_path('webpack.mix.js'),
        ]);
    }
}
