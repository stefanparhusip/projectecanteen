<?php

namespace App\Http\Middleware;

use App\Services\FeatureFlagService;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Gate a route behind a feature flag.
 *
 * Usage:  ->middleware('feature:flag-key')
 *
 * Responds with 404 — not 403 — so the feature's existence is not disclosed.
 */
class CheckFeatureFlag
{
    public function __construct(private FeatureFlagService $flags) {}

    public function handle(Request $request, Closure $next, string $flagKey): Response
    {
        $user = $request->user();

        if (! $this->flags->isEnabled($flagKey, $user, $request)) {
            abort(404);
        }

        return $next($request);
    }
}
