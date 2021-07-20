<?php

namespace MalvikLab\LaravelAcceptOnlyJsonResponse\Providers;

use Illuminate\Support\ServiceProvider;
use MalvikLab\LaravelAcceptOnlyJsonResponse\Http\Middleware\LaravelAcceptOnlyJsonResponsetMiddleware;

class AcceptOnlyJsonResponsetServiceProvider extends ServiceProvider
{
    private const VERSION = '1.0.0';
    
    public function boot()
    {
        $router = $this->app['router'];
        $router->aliasMiddleware('malviklab-laravel-accept-only-json-response', LaravelAcceptOnlyJsonResponsetMiddleware::class);
    }

    public function register()
    {
    }
}