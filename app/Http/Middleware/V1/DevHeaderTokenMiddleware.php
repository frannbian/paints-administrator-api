<?php

namespace App\Http\Middleware\V1;

use Closure;
use Illuminate\Http\Request;

class DevHeaderTokenMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!app()->environment('production') && $request->query('token')) {
            $token = $request->query('token');
            $request->headers->set('Authorization', "Bearer {$token}");
        }
        return $next($request);
    }
}
