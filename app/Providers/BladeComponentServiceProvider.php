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
        Blade::component('common.components.copyright', 'copyright');
        Blade::component('common.layout', 'layout');

        // ################   LANDING   ################ //

        // Widely used in landing components
        Blade::component('landing.components.article', 'article');
        Blade::component('landing.components.pricing_card', 'pricing-card');
        Blade::component('landing.components.faq_card', 'faq-card');
        Blade::component('landing.components.section', 'section');

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
        Blade::component('auth.components.form_group', 'form-group');
        Blade::component('auth.components.form', 'form');
        Blade::component('auth._layout', 'auth-layout');

        Blade::component('auth.confirm_password', 'confirm-password');
        Blade::component('auth.forgot_password', 'forgot-password');
        Blade::component('auth.login', 'login');
        Blade::component('auth.register', 'register');
        Blade::component('auth.reset_password', 'reset-password');
        Blade::component('auth.verify_email;', 'verify-email');
    }
}
