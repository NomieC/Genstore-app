<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the authenticated user has the "admin" role
        if (auth()->user() && auth()->user()->role === 'admin') {
            return $next($request);
        }

        // Redirect or display an error message for unauthorized access
        return redirect('/')->with('error', 'You do not have permission to access this page.');
    }
}
