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
        // Base website common things, like navbar and footer
        Blade::component('layouts.common.navbar', 'navbar');
        Blade::component('layouts.common.footer', 'footer');

        // Widely used components
        Blade::component('layouts.landing.components.article', 'article');
        Blade::component('layouts.landing.components.button', 'button');
        Blade::component(
            'layouts.landing.components.pricing_card',
            'pricing-card',
        );
        Blade::component('layouts.landing.components.faq_card', 'faq-card');
        Blade::component('layouts.landing.components.section', 'section');

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

        Blade::component('layouts.default', 'default');
        Blade::component('layouts.landing.landing', 'landing');
        //Blade::component('layouts.dashboard.dashboard', 'dashboard');
    }
}
