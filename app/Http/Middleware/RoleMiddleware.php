<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the authenticated user has the 'user' role
        if ($request->user() && $request->user()->hasRole('user')) {
            return $next($request);
        }

        // If the user does not have the required role, redirect or abort as needed
        abort(403, 'Unauthorized');
    }
}
