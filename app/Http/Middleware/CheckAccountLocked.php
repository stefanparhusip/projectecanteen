<?php

namespace App\Http\Middleware;

use App\Services\SuspiciousActivityService;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Rejects requests from users whose accounts have been soft-locked
 * due to repeated suspicious activity.
 */
class CheckAccountLocked
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();

        if ($user && SuspiciousActivityService::isLocked($user)) {
            if ($request->expectsJson()) {
                return response()->json([
                    'message' => 'Akun Anda sementara dikunci karena aktivitas mencurigakan. Silakan coba lagi dalam beberapa saat.',
                ], 423);
            }

            return redirect()->route('login')
                ->with('error', 'Akun Anda sementara dikunci karena aktivitas mencurigakan. Silakan coba lagi dalam '.SuspiciousActivityService::LOCK_MINUTES.' menit.');
        }

        return $next($request);
    }
}
