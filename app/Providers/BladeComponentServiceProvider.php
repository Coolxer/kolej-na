<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use VendorPackage\View\Layouts\Landing\Partials\LandingSection;

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
     * Bootstrap manual register of blade components
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

        Blade::component('layouts.landing.partials._section', 'section');
        Blade::component('layouts.landing.partials.why', 'why');
        Blade::component('layouts.landing.partials.solution', 'solution');
        Blade::component(
            'layouts.landing.partials.how_it_works',
            'how_it_works',
        );

        Blade::component('layouts.dashboard.dashboard', 'dashboard');

        Blade::component('layouts.home', LandingSection::class);
    }
}
