<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;

class LogRouteMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    
    {
        Log::info('Logging accès à la page d’accueil==============');
Log::info($request->fullUrl());
Log::info('IP Address: ' . $request->getClientIp());
Log::info('Method: ' . $request->getMethod());
        return $next($request);
    }
}
