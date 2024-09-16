<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
        Blade::component('body', \App\View\Components\Body::class);
        Blade::component('background', \App\View\Components\Background::class);
        Blade::component('banner', \App\View\Components\Banner::class);
        Blade::component('main', \App\View\Components\Main::class);
    }
}
