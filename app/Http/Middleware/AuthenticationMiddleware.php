<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthenticationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        session_start();
        if (isset($_SESSION['email']) && $_SESSION['email'] != '') {
            return $next($request);
        } else {
            return redirect()->route('site.login', ['error' => 1]);
        }

    }
}
