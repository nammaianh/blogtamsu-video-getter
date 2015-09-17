<?php

namespace App\Providers;

use Collective\Html\FormFacade;
use Collective\Html\HtmlFacade;
use Collective\Html\HtmlServiceProvider;
use Illuminate\Support\ServiceProvider;
use Vluzrmos\Tinker\TinkerServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Register tinker
        $this->app->register(TinkerServiceProvider::class);
    }
}
