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
        // Common things
        Blade::component('common.components.logo', 'logo');
        Blade::component('common.components.button', 'button');
        Blade::component('common.components.form_group', 'form-group');
        Blade::component('common.components.form', 'form');
        Blade::component('common.components.copyright', 'copyright');
        Blade::component('common.layout', 'layout');

        // ################   LANDING   ################ //

        // Widely used in landing components
        Blade::component('landing.components.article', 'article');
        Blade::component('landing.components.pricing_card', 'pricing-card');
        Blade::component('landing.components.faq_card', 'faq-card');
        Blade::component('landing.components.section', 'section');
        Blade::component('landing.components.auth_panel', 'landing-auth-panel');
        Blade::component('landing.components.menu', 'menu');

        // Landing page partials
        Blade::component('landing.partials.navbar', 'navbar');
        Blade::component('landing.partials.hero', 'hero');
        Blade::component('landing.partials.why', 'why');
        Blade::component('landing.partials.solution', 'solution');
        Blade::component('landing.partials.how_it_works', 'how-it-works');
        Blade::component('landing.partials.advantages', 'advantages');
        Blade::component('landing.partials.use_cases', 'use-cases');
        Blade::component('landing.partials.pricing', 'pricing');
        Blade::component('landing.partials.faq', 'faq');
        Blade::component('landing.partials.contact', 'contact');
        Blade::component('landing.partials.footer', 'footer');

        Blade::component('landing.landing', 'landing');

        // ################   AUTH   ################ //

        Blade::component(
            'auth.components.choose_personality',
            'choose-personality',
        );
        Blade::component('auth.components.session_status', 'session-status');
        Blade::component('auth._layout', 'auth-layout');

        // ################   ERRORS   ################ //
        Blade::component('errors._layout', 'error-layout');

        // ################   DASHBOARD   ################ //

        Blade::component('dashboard.components.navbar', 'dashboard-navbar');
        Blade::component(
            'dashboard.components.side_menu',
            'dashboard-side-menu',
        );
        Blade::component('dashboard.components.action_panel', 'action-panel');

        Blade::component('dashboard._layout', 'dashboard-layout');

        // ################   QUEUE   ################ //
        Blade::component('queue.components.queue_box', 'queue-box');
    }
}
