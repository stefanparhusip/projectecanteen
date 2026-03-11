<?php

declare(strict_types=1);

// odsl-C:\laragon\www\usk_no_ai\app\Console\Commands\DetectAnomalies.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Console\Commands\DetectAnomalies
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6.65.0.9-8.3.26-351afe39a8b2b76fca5d9683c1c8762d66b1870511237628a9475b2b8b28225b',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'App\\Console\\Commands\\DetectAnomalies',
                'filename' => 'C:/laragon/www/usk_no_ai/app/Console/Commands/DetectAnomalies.php',
            ],
        ],
        'namespace' => 'App\\Console\\Commands',
        'name' => 'App\\Console\\Commands\\DetectAnomalies',
        'shortName' => 'DetectAnomalies',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * DetectAnomalies
 *
 * Computes a rolling baseline (mean ± stddev) for hourly order/refund/topup
 * counts using the past 28 days of history, then flags the most recently
 * completed full hour if its observed value exceeds the threshold.
 *
 * Usage:
 *   php artisan anomalies:detect              # analyses the last completed hour
 *   php artisan anomalies:detect --hours=3   # analyses the last N hours
 *   php artisan anomalies:detect --sigma=3   # custom sigma threshold (default 2)
 *   php artisan anomalies:detect --dry-run   # print result without persisting
 */',
        'attributes' => [
        ],
        'startLine' => 26,
        'endLine' => 307,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Illuminate\\Console\\Command',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'signature' => [
                'declaringClassName' => 'App\\Console\\Commands\\DetectAnomalies',
                'implementingClassName' => 'App\\Console\\Commands\\DetectAnomalies',
                'name' => 'signature',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'anomalies:detect
                            {--hours=1   : Number of past completed hours to analyse}
                            {--sigma=2   : Sigma threshold above which a flag is raised}
                            {--days=28   : Days of history used to build the baseline}
                            {--dry-run   : Print results without writing to the DB}\'',
                    'attributes' => [
                        'startLine' => 28,
                        'endLine' => 32,
                        'startTokenPos' => 60,
                        'startFilePos' => 936,
                        'endTokenPos' => 60,
                        'endFilePos' => 1303,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 28,
                'endLine' => 32,
                'startColumn' => 5,
                'endColumn' => 85,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'description' => [
                'declaringClassName' => 'App\\Console\\Commands\\DetectAnomalies',
                'implementingClassName' => 'App\\Console\\Commands\\DetectAnomalies',
                'name' => 'description',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'Detect order / refund / topup anomalies and flag them in the anomalies table\'',
                    'attributes' => [
                        'startLine' => 34,
                        'endLine' => 34,
                        'startTokenPos' => 69,
                        'startFilePos' => 1338,
                        'endTokenPos' => 69,
                        'endFilePos' => 1415,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 34,
                'endLine' => 34,
                'startColumn' => 5,
                'endColumn' => 108,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
        ],
        'immediateMethods' => [
            'handle' => [
                'name' => 'handle',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'int',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 38,
                'endLine' => 101,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Console\\Commands',
                'declaringClassName' => 'App\\Console\\Commands\\DetectAnomalies',
                'implementingClassName' => 'App\\Console\\Commands\\DetectAnomalies',
                'currentClassName' => 'App\\Console\\Commands\\DetectAnomalies',
                'aliasName' => null,
            ],
            'analyseMetric' => [
                'name' => 'analyseMetric',
                'parameters' => [
                    'type' => [
                        'name' => 'type',
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
                        'startLine' => 109,
                        'endLine' => 109,
                        'startColumn' => 9,
                        'endColumn' => 20,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'windowStart' => [
                        'name' => 'windowStart',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Carbon\\Carbon',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 110,
                        'endLine' => 110,
                        'startColumn' => 9,
                        'endColumn' => 35,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'windowEnd' => [
                        'name' => 'windowEnd',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Carbon\\Carbon',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 111,
                        'endLine' => 111,
                        'startColumn' => 9,
                        'endColumn' => 33,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                    'historyDays' => [
                        'name' => 'historyDays',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'int',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 112,
                        'endLine' => 112,
                        'startColumn' => 9,
                        'endColumn' => 27,
                        'parameterIndex' => 3,
                        'isOptional' => false,
                    ],
                    'sigmaThreshold' => [
                        'name' => 'sigmaThreshold',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'float',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 113,
                        'endLine' => 113,
                        'startColumn' => 9,
                        'endColumn' => 30,
                        'parameterIndex' => 4,
                        'isOptional' => false,
                    ],
                    'dryRun' => [
                        'name' => 'dryRun',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'bool',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 114,
                        'endLine' => 114,
                        'startColumn' => 9,
                        'endColumn' => 22,
                        'parameterIndex' => 5,
                        'isOptional' => false,
                    ],
                    'observed' => [
                        'name' => 'observed',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'int',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 115,
                        'endLine' => 115,
                        'startColumn' => 9,
                        'endColumn' => 24,
                        'parameterIndex' => 6,
                        'isOptional' => false,
                    ],
                    'baseline' => [
                        'name' => 'baseline',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'array',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 116,
                        'endLine' => 116,
                        'startColumn' => 9,
                        'endColumn' => 24,
                        'parameterIndex' => 7,
                        'isOptional' => false,
                    ],
                    'context' => [
                        'name' => 'context',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'array',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 117,
                        'endLine' => 117,
                        'startColumn' => 9,
                        'endColumn' => 23,
                        'parameterIndex' => 8,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'int',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Compare observed value against the baseline; persist anomaly if threshold exceeded.
 */',
                'startLine' => 108,
                'endLine' => 157,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'App\\Console\\Commands',
                'declaringClassName' => 'App\\Console\\Commands\\DetectAnomalies',
                'implementingClassName' => 'App\\Console\\Commands\\DetectAnomalies',
                'currentClassName' => 'App\\Console\\Commands\\DetectAnomalies',
                'aliasName' => null,
            ],
            'countOrders' => [
                'name' => 'countOrders',
                'parameters' => [
                    'from' => [
                        'name' => 'from',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Carbon\\Carbon',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 161,
                        'endLine' => 161,
                        'startColumn' => 34,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'to' => [
                        'name' => 'to',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Carbon\\Carbon',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 161,
                        'endLine' => 161,
                        'startColumn' => 56,
                        'endColumn' => 73,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'int',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 161,
                'endLine' => 164,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'App\\Console\\Commands',
                'declaringClassName' => 'App\\Console\\Commands\\DetectAnomalies',
                'implementingClassName' => 'App\\Console\\Commands\\DetectAnomalies',
                'currentClassName' => 'App\\Console\\Commands\\DetectAnomalies',
                'aliasName' => null,
            ],
            'countRefunds' => [
                'name' => 'countRefunds',
                'parameters' => [
                    'from' => [
                        'name' => 'from',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Carbon\\Carbon',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 166,
                        'endLine' => 166,
                        'startColumn' => 35,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'to' => [
                        'name' => 'to',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Carbon\\Carbon',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 166,
                        'endLine' => 166,
                        'startColumn' => 57,
                        'endColumn' => 74,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'int',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 166,
                'endLine' => 171,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'App\\Console\\Commands',
                'declaringClassName' => 'App\\Console\\Commands\\DetectAnomalies',
                'implementingClassName' => 'App\\Console\\Commands\\DetectAnomalies',
                'currentClassName' => 'App\\Console\\Commands\\DetectAnomalies',
                'aliasName' => null,
            ],
            'countTopups' => [
                'name' => 'countTopups',
                'parameters' => [
                    'from' => [
                        'name' => 'from',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Carbon\\Carbon',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 173,
                        'endLine' => 173,
                        'startColumn' => 34,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'to' => [
                        'name' => 'to',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Carbon\\Carbon',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 173,
                        'endLine' => 173,
                        'startColumn' => 56,
                        'endColumn' => 73,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'int',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 173,
                'endLine' => 178,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'App\\Console\\Commands',
                'declaringClassName' => 'App\\Console\\Commands\\DetectAnomalies',
                'implementingClassName' => 'App\\Console\\Commands\\DetectAnomalies',
                'currentClassName' => 'App\\Console\\Commands\\DetectAnomalies',
                'aliasName' => null,
            ],
            'buildOrderBaseline' => [
                'name' => 'buildOrderBaseline',
                'parameters' => [
                    'windowStart' => [
                        'name' => 'windowStart',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Carbon\\Carbon',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 186,
                        'endLine' => 186,
                        'startColumn' => 41,
                        'endColumn' => 67,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'days' => [
                        'name' => 'days',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'int',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 186,
                        'endLine' => 186,
                        'startColumn' => 70,
                        'endColumn' => 78,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
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
                'docComment' => '/**
 * Returns [\'mean\' => float, \'stddev\' => float] using the same hour-of-day
 * across the past $days days as the sample.
 */',
                'startLine' => 186,
                'endLine' => 200,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'App\\Console\\Commands',
                'declaringClassName' => 'App\\Console\\Commands\\DetectAnomalies',
                'implementingClassName' => 'App\\Console\\Commands\\DetectAnomalies',
                'currentClassName' => 'App\\Console\\Commands\\DetectAnomalies',
                'aliasName' => null,
            ],
            'buildRefundBaseline' => [
                'name' => 'buildRefundBaseline',
                'parameters' => [
                    'windowStart' => [
                        'name' => 'windowStart',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Carbon\\Carbon',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 202,
                        'endLine' => 202,
                        'startColumn' => 42,
                        'endColumn' => 68,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'days' => [
                        'name' => 'days',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'int',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 202,
                        'endLine' => 202,
                        'startColumn' => 71,
                        'endColumn' => 79,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
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
                'startLine' => 202,
                'endLine' => 218,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'App\\Console\\Commands',
                'declaringClassName' => 'App\\Console\\Commands\\DetectAnomalies',
                'implementingClassName' => 'App\\Console\\Commands\\DetectAnomalies',
                'currentClassName' => 'App\\Console\\Commands\\DetectAnomalies',
                'aliasName' => null,
            ],
            'buildTopupBaseline' => [
                'name' => 'buildTopupBaseline',
                'parameters' => [
                    'windowStart' => [
                        'name' => 'windowStart',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Carbon\\Carbon',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 220,
                        'endLine' => 220,
                        'startColumn' => 41,
                        'endColumn' => 67,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'days' => [
                        'name' => 'days',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'int',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 220,
                        'endLine' => 220,
                        'startColumn' => 70,
                        'endColumn' => 78,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
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
                'startLine' => 220,
                'endLine' => 236,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'App\\Console\\Commands',
                'declaringClassName' => 'App\\Console\\Commands\\DetectAnomalies',
                'implementingClassName' => 'App\\Console\\Commands\\DetectAnomalies',
                'currentClassName' => 'App\\Console\\Commands\\DetectAnomalies',
                'aliasName' => null,
            ],
            'orderContext' => [
                'name' => 'orderContext',
                'parameters' => [
                    'from' => [
                        'name' => 'from',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Carbon\\Carbon',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 240,
                        'endLine' => 240,
                        'startColumn' => 35,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'to' => [
                        'name' => 'to',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Carbon\\Carbon',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 240,
                        'endLine' => 240,
                        'startColumn' => 57,
                        'endColumn' => 74,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
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
                'startLine' => 240,
                'endLine' => 251,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'App\\Console\\Commands',
                'declaringClassName' => 'App\\Console\\Commands\\DetectAnomalies',
                'implementingClassName' => 'App\\Console\\Commands\\DetectAnomalies',
                'currentClassName' => 'App\\Console\\Commands\\DetectAnomalies',
                'aliasName' => null,
            ],
            'refundContext' => [
                'name' => 'refundContext',
                'parameters' => [
                    'from' => [
                        'name' => 'from',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Carbon\\Carbon',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 253,
                        'endLine' => 253,
                        'startColumn' => 36,
                        'endColumn' => 55,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'to' => [
                        'name' => 'to',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Carbon\\Carbon',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 253,
                        'endLine' => 253,
                        'startColumn' => 58,
                        'endColumn' => 75,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
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
                'startLine' => 253,
                'endLine' => 265,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'App\\Console\\Commands',
                'declaringClassName' => 'App\\Console\\Commands\\DetectAnomalies',
                'implementingClassName' => 'App\\Console\\Commands\\DetectAnomalies',
                'currentClassName' => 'App\\Console\\Commands\\DetectAnomalies',
                'aliasName' => null,
            ],
            'topupContext' => [
                'name' => 'topupContext',
                'parameters' => [
                    'from' => [
                        'name' => 'from',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Carbon\\Carbon',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 267,
                        'endLine' => 267,
                        'startColumn' => 35,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'to' => [
                        'name' => 'to',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Carbon\\Carbon',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 267,
                        'endLine' => 267,
                        'startColumn' => 57,
                        'endColumn' => 74,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
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
                'startLine' => 267,
                'endLine' => 279,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'App\\Console\\Commands',
                'declaringClassName' => 'App\\Console\\Commands\\DetectAnomalies',
                'implementingClassName' => 'App\\Console\\Commands\\DetectAnomalies',
                'currentClassName' => 'App\\Console\\Commands\\DetectAnomalies',
                'aliasName' => null,
            ],
            'statistics' => [
                'name' => 'statistics',
                'parameters' => [
                    'values' => [
                        'name' => 'values',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'array',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 289,
                        'endLine' => 289,
                        'startColumn' => 39,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
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
                'docComment' => '/**
 * Compute population mean and sample standard deviation.
 *
 * @param  array<int>  $values
 * @return array{mean: float, stddev: float}
 */',
                'startLine' => 289,
                'endLine' => 306,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'App\\Console\\Commands',
                'declaringClassName' => 'App\\Console\\Commands\\DetectAnomalies',
                'implementingClassName' => 'App\\Console\\Commands\\DetectAnomalies',
                'currentClassName' => 'App\\Console\\Commands\\DetectAnomalies',
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
