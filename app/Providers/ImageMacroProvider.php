<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Vite;

class ImageMacroProvider extends ServiceProvider
{
    /**
     * Bootstrap images macros
     *
     * @return void
     */
    public function boot()
    {
        // Vite::macro(
        //     'image',
        //     fn($asset) => $this->asset("/resources/images/{$asset}"),
        // );

        // Vite::macro(
        //     'illustrations',
        //     fn($asset) => $this->asset(
        //         "/resources/images/illustrations/{$asset}",
        //     ),
        // );
    }
}
