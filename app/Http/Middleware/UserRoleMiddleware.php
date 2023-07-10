<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  \Integer  role
     * @return mixed
     */

    // Add custom parameter $role which pass from Route.php
    public function handle(Request $request, Closure $next, $role): Response
    {
        // Check & verify with route, you will more understand
        if (auth()->user()->role == $role) {
            return $next($request);
        }

        return response()->json(['You do not have permission to access for this page.']);
    }
}
