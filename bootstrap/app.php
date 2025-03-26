<?php

use App\Http\Middleware\BlockRootAccess;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

use function Pest\Laravel\handleExceptions;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
        $middleware->append(BlockRootAccess::class);
        $middleware->append(handlenot
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
