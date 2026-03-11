<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
            'admin' => \App\Http\Middleware\EnsureAdmin::class,
            'super_admin' => \App\Http\Middleware\EnsureSuperAdmin::class,
            'account.locked' => \App\Http\Middleware\CheckAccountLocked::class,
            'feature' => \App\Http\Middleware\CheckFeatureFlag::class,
            'metrics.auth' => \App\Http\Middleware\MetricsAuth::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        \Sentry\Laravel\Integration::handles($exceptions);
    })->create();
