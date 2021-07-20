<?php

namespace MalvikLab\LaravelAcceptOnlyJsonResponse\Http\Middleware;

use Closure;

class LaravelAcceptOnlyJsonResponsetMiddleware
{
    public function handle($request, Closure $next)
    {
        if ( !$request->hasHeader('accept') || 'application/json' !== $request->header('accept') )
        {
            return response()->json([
                'error' => 'Use the "Accept: application/json" HTTP Header'
            ], 400);
        }

        return $next($request);
    }
}