<?php

namespace App\Http\Middleware;

use Closure;

class Cors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request)
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Origin', 'GET, POST, PUT, DELETE, OPTIONS')
            ->header('Access-Control-Allow-Origin', 'Content-Type, Authorization, X-Requested-With, X-XSRF-TOKEN');
    }
}
