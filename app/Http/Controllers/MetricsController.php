<?php

namespace App\Http\Controllers;

use App\Services\MetricsService;
use Illuminate\Http\Response;

/**
 * Exposes application metrics in Prometheus text format at GET /metrics.
 *
 * Authentication is handled by the MetricsAuth middleware (bearer token).
 *
 * Prometheus scrape config example:
 *
 *   - job_name: 'usk_canteen'
 *     scrape_interval: 30s
 *     static_configs:
 *       - targets: ['your-domain.com']
 *     metrics_path: /metrics
 *     authorization:
 *       credentials: "your-METRICS_SECRET-value"
 */
class MetricsController extends Controller
{
    public function __construct(private MetricsService $metrics) {}

    public function index(): Response
    {
        return response($this->metrics->render(), 200, [
            'Content-Type' => 'text/plain; version=0.0.4; charset=utf-8',
        ]);
    }
}
