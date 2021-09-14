<?php

namespace MalvikLab\LaravelAcceptOnlyJsonResponse\Http\Middleware;

use Closure;

class LaravelAcceptOnlyJsonResponseMiddleware
{
    public function handle($request, Closure $next)
    {
        if ( !$request->hasHeader('accept') || 'application/json' !== $request->header('accept') )
        {
            return response('Use the "Accept: application/json" HTTP Header', 400)
                ->header('Content-Type', 'text/plain');
        }

        return $next($request);
    }
}