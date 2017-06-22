<?php

namespace Skyrpex\Starpack;

use Illuminate\Support\ServiceProvider;

class StarpackServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'starpack');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/starpack'),
        ], 'views');

        $this->publishes([
            __DIR__.'/../resources/assets' => resource_path('assets'),
        ], 'assets');

        $this->publishes([
            __DIR__.'/../resources/package.json' => base_path('package.json'),
            __DIR__.'/../resources/poi.config.js' => base_path('poi.config.js'),
        ], 'assets');

        $this->publishes([
            __DIR__.'/../resources/public/assets' => public_path('assets'),
        ], 'assets');
    }
}
