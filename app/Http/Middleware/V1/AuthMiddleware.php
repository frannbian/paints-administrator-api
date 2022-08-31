<?php

namespace App\Http\Middleware\V1;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\Api\V1\User;

class AuthMiddleware
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
        $userId = $request->header('X-HTTP-USER-ID');
        
        $user = Cache::remember('user-id-' . $userId, 3600, function () use ($userId) {
            // Connect to the service that host users, in this case (test) we use the default User model
            return User::find($userId);
        });

        if(!$user) {
            return response()->json(['error' => 'Unauthenticated.'], 401);

        }

        return $next($request);
    }
}
