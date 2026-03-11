<?php

declare(strict_types=1);

// odsl-C:\laragon\www\usk_no_ai\app\Services\HealthCheckService.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Services\HealthCheckService
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6.65.0.9-8.3.26-56673bf84396ee5816e28f4056fba22742ec4ccd434a75df575dda0f20d5d325',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'App\\Services\\HealthCheckService',
                'filename' => 'C:/laragon/www/usk_no_ai/app/Services/HealthCheckService.php',
            ],
        ],
        'namespace' => 'App\\Services',
        'name' => 'App\\Services\\HealthCheckService',
        'shortName' => 'HealthCheckService',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * Runs a set of lightweight health checks and returns structured results.
 *
 * Each check returns an array with at minimum a \'status\' key:
 *   \'ok\'             — healthy
 *   \'degraded\'       — working but with warnings
 *   \'error\'          — failed
 *   \'unknown\'        — no data yet (e.g. cron has never run)
 */',
        'attributes' => [
        ],
        'startLine' => 17,
        'endLine' => 157,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
            'TRACKED_CRON_JOBS' => [
                'declaringClassName' => 'App\\Services\\HealthCheckService',
                'implementingClassName' => 'App\\Services\\HealthCheckService',
                'name' => 'TRACKED_CRON_JOBS',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '[\'menu:reset-stock\' => [\'label\' => \'Reset Stok\', \'max_lag_hours\' => 25], \'reports:reconcile\' => [\'label\' => \'Rekonsiliasi\', \'max_lag_hours\' => 25], \'anomalies:detect\' => [\'label\' => \'Deteksi Anomali\', \'max_lag_hours\' => 2], \'stock:check-alerts\' => [\'label\' => \'Alert Stok\', \'max_lag_hours\' => 1], \'orders:recurring\' => [\'label\' => \'Recurring Order\', \'max_lag_hours\' => 25], \'backup:run\' => [\'label\' => \'Backup Harian\', \'max_lag_hours\' => 25], \'backup:cleanup\' => [\'label\' => \'Cleanup Backup\', \'max_lag_hours\' => 25]]',
                    'attributes' => [
                        'startLine' => 24,
                        'endLine' => 32,
                        'startTokenPos' => 35,
                        'startFilePos' => 708,
                        'endTokenPos' => 177,
                        'endFilePos' => 1356,
                    ],
                ],
                'docComment' => '/**
 * Ordered list of scheduled jobs to track, with their expected run intervals.
 *
 * \'max_lag_hours\' is how long we wait before marking the job as \'late\'.
 */',
                'attributes' => [
                ],
                'startLine' => 24,
                'endLine' => 32,
                'startColumn' => 5,
                'endColumn' => 6,
            ],
            'CRON_CACHE_PREFIX' => [
                'declaringClassName' => 'App\\Services\\HealthCheckService',
                'implementingClassName' => 'App\\Services\\HealthCheckService',
                'name' => 'CRON_CACHE_PREFIX',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '\'health:cron:\'',
                    'attributes' => [
                        'startLine' => 35,
                        'endLine' => 35,
                        'startTokenPos' => 190,
                        'startFilePos' => 1452,
                        'endTokenPos' => 190,
                        'endFilePos' => 1465,
                    ],
                ],
                'docComment' => '/** Cache key template for cron health pings */',
                'attributes' => [
                ],
                'startLine' => 35,
                'endLine' => 35,
                'startColumn' => 5,
                'endColumn' => 52,
            ],
        ],
        'immediateProperties' => [
        ],
        'immediateMethods' => [
            'all' => [
                'name' => 'all',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/** Run all checks and return a keyed array. */',
                'startLine' => 38,
                'endLine' => 48,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Services',
                'declaringClassName' => 'App\\Services\\HealthCheckService',
                'implementingClassName' => 'App\\Services\\HealthCheckService',
                'currentClassName' => 'App\\Services\\HealthCheckService',
                'aliasName' => null,
            ],
            'checkDatabase' => [
                'name' => 'checkDatabase',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 52,
                'endLine' => 63,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Services',
                'declaringClassName' => 'App\\Services\\HealthCheckService',
                'implementingClassName' => 'App\\Services\\HealthCheckService',
                'currentClassName' => 'App\\Services\\HealthCheckService',
                'aliasName' => null,
            ],
            'checkCache' => [
                'name' => 'checkCache',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 65,
                'endLine' => 77,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Services',
                'declaringClassName' => 'App\\Services\\HealthCheckService',
                'implementingClassName' => 'App\\Services\\HealthCheckService',
                'currentClassName' => 'App\\Services\\HealthCheckService',
                'aliasName' => null,
            ],
            'checkStorage' => [
                'name' => 'checkStorage',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 79,
                'endLine' => 91,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Services',
                'declaringClassName' => 'App\\Services\\HealthCheckService',
                'implementingClassName' => 'App\\Services\\HealthCheckService',
                'currentClassName' => 'App\\Services\\HealthCheckService',
                'aliasName' => null,
            ],
            'checkQueue' => [
                'name' => 'checkQueue',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 93,
                'endLine' => 114,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Services',
                'declaringClassName' => 'App\\Services\\HealthCheckService',
                'implementingClassName' => 'App\\Services\\HealthCheckService',
                'currentClassName' => 'App\\Services\\HealthCheckService',
                'aliasName' => null,
            ],
            'checkCron' => [
                'name' => 'checkCron',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 116,
                'endLine' => 140,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Services',
                'declaringClassName' => 'App\\Services\\HealthCheckService',
                'implementingClassName' => 'App\\Services\\HealthCheckService',
                'currentClassName' => 'App\\Services\\HealthCheckService',
                'aliasName' => null,
            ],
            'checkSentry' => [
                'name' => 'checkSentry',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 142,
                'endLine' => 150,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Services',
                'declaringClassName' => 'App\\Services\\HealthCheckService',
                'implementingClassName' => 'App\\Services\\HealthCheckService',
                'currentClassName' => 'App\\Services\\HealthCheckService',
                'aliasName' => null,
            ],
            'pingCron' => [
                'name' => 'pingCron',
                'parameters' => [
                    'jobKey' => [
                        'name' => 'jobKey',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'string',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 153,
                        'endLine' => 153,
                        'startColumn' => 37,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'void',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/** Record that a cron job ran successfully right now. */',
                'startLine' => 153,
                'endLine' => 156,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'App\\Services',
                'declaringClassName' => 'App\\Services\\HealthCheckService',
                'implementingClassName' => 'App\\Services\\HealthCheckService',
                'currentClassName' => 'App\\Services\\HealthCheckService',
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
