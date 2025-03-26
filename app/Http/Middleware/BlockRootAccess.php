<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BlockRootAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->is('/')) {
            return response()->json([
                'error' => 'Acesso negado',
                'message' => 'Você não tem permissão para acessar esta rota.'
            ], 403);
        }
        return $next($request);
    }
}
