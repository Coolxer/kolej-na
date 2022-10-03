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
     * Bootstrap manual register of blade components
     *
     * @return void
     */
    public function boot()
    {
        Blade::component('layouts.partials.navbar', 'navbar');
        Blade::component('layouts.partials.footer', 'footer');
        Blade::component('layouts.default', 'default');

        Blade::component('layouts.landing.partials._article', 'article');
        Blade::component('layouts.landing.partials._button', 'button');
        Blade::component(
            'layouts.landing.partials._pricing_card',
            'pricing-card',
        );
        Blade::component('layouts.landing.partials._faq_card', 'faq-card');
        Blade::component('layouts.landing.partials._section', 'section');

        Blade::component('layouts.landing.partials.hero', 'hero');
        Blade::component('layouts.landing.partials.why', 'why');
        Blade::component('layouts.landing.partials.solution', 'solution');
        Blade::component(
            'layouts.landing.partials.how_it_works',
            'how-it-works',
        );
        Blade::component('layouts.landing.partials.advantages', 'advantages');
        Blade::component('layouts.landing.partials.use_cases', 'use-cases');
        Blade::component('layouts.landing.partials.pricing', 'pricing');
        Blade::component('layouts.landing.partials.faq', 'faq');
        Blade::component('layouts.landing.partials.contact', 'contact');

        Blade::component('layouts.landing.landing', 'landing');
        //Blade::component('layouts.dashboard.dashboard', 'dashboard');
    }
}
