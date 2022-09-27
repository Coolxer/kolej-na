<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class BladeComponentServiceProvider extends ServiceProvider
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
        Blade::component('layouts.partials.navbar', 'navbar');
        Blade::component('layouts.partials.footer', 'footer');
        Blade::component('layouts.default', 'default');

        Blade::component('layouts.landing.landing', 'landing');
        Blade::component('layouts.landing.partials.hero', 'hero');

        Blade::component('layouts.dashboard.dashboard', 'dashboard');

        //Blade::component('layouts.home', 'default');
    }
}
