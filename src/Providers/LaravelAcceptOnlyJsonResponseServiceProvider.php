<?php

namespace MalvikLab\LaravelAcceptOnlyJsonResponse\Providers;

use Illuminate\Support\ServiceProvider;
use MalvikLab\LaravelAcceptOnlyJsonResponse\Http\Middleware\LaravelAcceptOnlyJsonResponseMiddleware;

class LaravelAcceptOnlyJsonResponseServiceProvider extends ServiceProvider
{
    private const VERSION = '1.0.0';

    public function boot()
    {
        $router = $this->app['router'];
        $router->aliasMiddleware('malviklab-laravel-accept-only-json-response', LaravelAcceptOnlyJsonResponseMiddleware::class);
    }

    public function register()
    {
    }
}