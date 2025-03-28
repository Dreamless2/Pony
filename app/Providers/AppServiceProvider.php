<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // force https production
        if (app()->environment('production')) {
            $this->app->bind('url', function () {
                return new \Illuminate\Contracts\Routing\UrlGenerator(function () {
                    return 'https://'.$_SERVER['HTTP_HOST'];
                });
            });
    }
}
