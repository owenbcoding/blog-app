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
        Blade::component('layouts.admin', 'layouts.admin');
        Blade::component('layouts.app', 'layouts.app');
        Blade::component('components.posts', 'posts');
        Blade::component('components.post-card', 'post-card');
    }
}
