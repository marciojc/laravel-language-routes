<?php

namespace marciojc\LanguageRoutes;

use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class LanguageRoutesServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     */
    public function register()
    {

    }

    /**
     * Bootstrap the application services.
     *
     * @param \Illuminate\Routing\Router $router
     */
    public function boot(Router $router, Dispatcher $event)
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/routes.php');
    }
}
