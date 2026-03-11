<?php

declare(strict_types=1);

// odsl-C:\laragon\www\usk_no_ai\app\Http\Controllers\MetricsController.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Http\Controllers\MetricsController
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6.65.0.9-8.3.26-24d13ef0f3d14fd27a375e583e55e1afeee7716dd0a2ff65581577cc3a64d0b5',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'App\\Http\\Controllers\\MetricsController',
                'filename' => 'C:/laragon/www/usk_no_ai/app/Http/Controllers/MetricsController.php',
            ],
        ],
        'namespace' => 'App\\Http\\Controllers',
        'name' => 'App\\Http\\Controllers\\MetricsController',
        'shortName' => 'MetricsController',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * Exposes application metrics in Prometheus text format at GET /metrics.
 *
 * Authentication is handled by the MetricsAuth middleware (bearer token).
 *
 * Prometheus scrape config example:
 *
 *   - job_name: \'usk_canteen\'
 *     scrape_interval: 30s
 *     static_configs:
 *       - targets: [\'your-domain.com\']
 *     metrics_path: /metrics
 *     authorization:
 *       credentials: "your-METRICS_SECRET-value"
 */',
        'attributes' => [
        ],
        'startLine' => 23,
        'endLine' => 33,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'App\\Http\\Controllers\\Controller',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'metrics' => [
                'declaringClassName' => 'App\\Http\\Controllers\\MetricsController',
                'implementingClassName' => 'App\\Http\\Controllers\\MetricsController',
                'name' => 'metrics',
                'modifiers' => 4,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'App\\Services\\MetricsService',
                        'isIdentifier' => false,
                    ],
                ],
                'default' => null,
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 25,
                'endLine' => 25,
                'startColumn' => 33,
                'endColumn' => 63,
                'isPromoted' => true,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
        ],
        'immediateMethods' => [
            '__construct' => [
                'name' => '__construct',
                'parameters' => [
                    'metrics' => [
                        'name' => 'metrics',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'App\\Services\\MetricsService',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => true,
                        'attributes' => [
                        ],
                        'startLine' => 25,
                        'endLine' => 25,
                        'startColumn' => 33,
                        'endColumn' => 63,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 25,
                'endLine' => 25,
                'startColumn' => 5,
                'endColumn' => 67,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Http\\Controllers',
                'declaringClassName' => 'App\\Http\\Controllers\\MetricsController',
                'implementingClassName' => 'App\\Http\\Controllers\\MetricsController',
                'currentClassName' => 'App\\Http\\Controllers\\MetricsController',
                'aliasName' => null,
            ],
            'index' => [
                'name' => 'index',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Illuminate\\Http\\Response',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 27,
                'endLine' => 32,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Http\\Controllers',
                'declaringClassName' => 'App\\Http\\Controllers\\MetricsController',
                'implementingClassName' => 'App\\Http\\Controllers\\MetricsController',
                'currentClassName' => 'App\\Http\\Controllers\\MetricsController',
                'aliasName' => null,
            ],
        ],
        'traitsData' => [
            'aliases' => [
            ],
            'modifiers' => [
            ],
            'precedences' => [
            ],
            'hashes' => [
            ],
        ],
    ],
]);
