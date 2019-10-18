<?php

namespace Prashant\CustomStyle\Providers;

use Illuminate\Support\ServiceProvider;
use Prashant\CustomStyle\Providers\EventServiceProvider;

class CustomStyleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'customstyle');

        $this->app->register(EventServiceProvider::class);
    }
}