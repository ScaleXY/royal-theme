<?php

namespace ScaleXY\RoyalTheme;

use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::style('royal-theme', __DIR__.'/../css/theme.css');
            Nova::style('royal-theme-collapse-css', __DIR__.'/../css/collapse.css');
            Nova::script('royal-theme-collapse-js', __DIR__.'/../js/collapse.js');
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
