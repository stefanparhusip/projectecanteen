<?php

namespace App\Providers;

use App\Services\FeatureFlagService;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Use Bootstrap 5 pagination views instead of the default Tailwind template
        Paginator::useBootstrapFive();

        // @feature('flag-key') ... @endfeature — renders block only when flag is active
        Blade::if('feature', function (string $key) {
            /** @var FeatureFlagService $service */
            $service = app(FeatureFlagService::class);

            return $service->isEnabled($key, auth()->user(), request());
        });

        $this->configureRateLimiting();
    }

    protected function configureRateLimiting(): void
    {
        // Login: 10 attempts per minute per IP (brute-force guard)
        RateLimiter::for('login', function (Request $request) {
            return Limit::perMinute(10)->by($request->ip());
        });

        // Order create: 20 orders per minute per authenticated user
        RateLimiter::for('order-create', function (Request $request) {
            return Limit::perMinute(20)->by(
                optional($request->user())->id ?: $request->ip()
            );
        });

        // Top-up request: 5 requests per minute per user (prevents flooding approval queue)
        RateLimiter::for('topup-request', function (Request $request) {
            return Limit::perMinute(5)->by(
                optional($request->user())->id ?: $request->ip()
            );
        });

        // API: 60 requests per minute per token/IP (general API throttle)
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(
                optional($request->user())->id ?: $request->ip()
            );
        });

        // API authentication (token issue): 10 attempts per minute per IP
        RateLimiter::for('api-auth', function (Request $request) {
            return Limit::perMinute(10)->by($request->ip());
        });
    }
}
