<?php

namespace Webkul\CustomStyle\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Event::listen('bagisto.admin.layout.head', function ($viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('customstyle::admin');
        });

        Event::listen('bagisto.shop.layout.head', function ($viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('customstyle::shop');
        });
    }
}