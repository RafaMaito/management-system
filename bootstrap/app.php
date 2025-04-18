<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Middleware aliases.
        $middleware->alias([
        ]);

        // Middleware global of the application (executed in all routes).
        $middleware->group('web', [
            // Initiate the session for thhe old session
            // and start the session for the new session
            Illuminate\Session\Middleware\StartSession::class,
            // Share the errors from the session with the views
            Illuminate\View\Middleware\ShareErrorsFromSession::class,
            // CSRF Protection
            Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class,
        ]);

        // Middleware group "api" of the application (executed in all routes).
        $middleware->group('api', [
        ]);

        $middleware->group('market', [
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
    })->create();