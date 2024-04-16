<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BlockIpMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    $t=['192.168.0.1', '202.173.125.72', '127.0.0.1'];
    public function handle(Request $request, Closure $next): Response
    {

        return $next($request);
    }
}
