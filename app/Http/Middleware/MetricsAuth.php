<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Authenticates the /metrics endpoint via a static bearer token.
 *
 * Configure METRICS_SECRET in your .env file.
 * If METRICS_SECRET is empty, the endpoint is disabled (403).
 *
 * Usage in prometheus.yml:
 *   authorization:
 *     credentials: "your-secret-here"
 */
class MetricsAuth
{
    public function handle(Request $request, Closure $next): Response
    {
        $secret = config('app.metrics_secret');

        // Endpoint disabled if no secret is configured
        if (empty($secret)) {
            return response('Metrics endpoint is disabled. Set METRICS_SECRET in .env.', 403)
                ->header('Content-Type', 'text/plain');
        }

        $provided = $request->bearerToken();

        if (! hash_equals($secret, (string) $provided)) {
            return response('Unauthorized: invalid or missing Bearer token.', 401)
                ->header('Content-Type', 'text/plain')
                ->header('WWW-Authenticate', 'Bearer realm="metrics"');
        }

        return $next($request);
    }
}
