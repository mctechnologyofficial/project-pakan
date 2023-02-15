<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Blade::directive('kontol', function ($expression) {
        //     return "&lt;?php if (fnmatch({$expression}, Auth::user()->country == 'Brunei Darussalam')) : ?&gt;";
        // });

        // Blade::directive('endkontol', function ($expression) {
        //     return '&lt;?php endif; ?&gt;';
        // });
    }
}
