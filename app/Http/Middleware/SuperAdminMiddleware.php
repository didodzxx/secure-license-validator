<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class SuperAdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Assuming user is authenticated
        if (!auth()->user() || !auth()->user()->hasRole('super_admin')) {
            abort(403);
        }

        return $next($request);
    }
}
