<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Restricts access to super-admin–only routes.
 * Super-admins have role='admin' AND is_super_admin=true.
 */
class EnsureSuperAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        if (! $request->user() || ! $request->user()->isSuperAdmin()) {
            abort(403, 'Akses ditolak. Hanya super-admin yang diizinkan.');
        }

        return $next($request);
    }
}
