<?php

declare(strict_types=1);

// odsl-C:\laragon\www\usk_no_ai\app\Services\AdminAlertService.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Services\AdminAlertService
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6.65.0.9-8.3.26-f2428370d57a89eb2e6d60faff27ee5c7b1f879de610c4c94441cffa576f62cd',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'App\\Services\\AdminAlertService',
                'filename' => 'C:/laragon/www/usk_no_ai/app/Services/AdminAlertService.php',
            ],
        ],
        'namespace' => 'App\\Services',
        'name' => 'App\\Services\\AdminAlertService',
        'shortName' => 'AdminAlertService',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * Detects unusual activity spikes and writes structured alert logs.
 * Runs lightweight counts against the DB; results are cached for 1 minute
 * to avoid hammering the DB on every request.
 */',
        'attributes' => [
        ],
        'startLine' => 15,
        'endLine' => 101,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
            'ORDER_SPIKE_THRESHOLD' => [
                'declaringClassName' => 'App\\Services\\AdminAlertService',
                'implementingClassName' => 'App\\Services\\AdminAlertService',
                'name' => 'ORDER_SPIKE_THRESHOLD',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '50',
                    'attributes' => [
                        'startLine' => 20,
                        'endLine' => 20,
                        'startTokenPos' => 43,
                        'startFilePos' => 522,
                        'endTokenPos' => 43,
                        'endFilePos' => 523,
                    ],
                ],
                'docComment' => '/**
 * Orders placed in the last window that triggers an alert.
 */',
                'attributes' => [
                ],
                'startLine' => 20,
                'endLine' => 20,
                'startColumn' => 5,
                'endColumn' => 37,
            ],
            'TOPUP_PENDING_THRESHOLD' => [
                'declaringClassName' => 'App\\Services\\AdminAlertService',
                'implementingClassName' => 'App\\Services\\AdminAlertService',
                'name' => 'TOPUP_PENDING_THRESHOLD',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '20',
                    'attributes' => [
                        'startLine' => 25,
                        'endLine' => 25,
                        'startTokenPos' => 54,
                        'startFilePos' => 648,
                        'endTokenPos' => 54,
                        'endFilePos' => 649,
                    ],
                ],
                'docComment' => '/**
 * Top-up requests pending approval that triggers an alert.
 */',
                'attributes' => [
                ],
                'startLine' => 25,
                'endLine' => 25,
                'startColumn' => 5,
                'endColumn' => 39,
            ],
            'SPIKE_WINDOW_MINUTES' => [
                'declaringClassName' => 'App\\Services\\AdminAlertService',
                'implementingClassName' => 'App\\Services\\AdminAlertService',
                'name' => 'SPIKE_WINDOW_MINUTES',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '5',
                    'attributes' => [
                        'startLine' => 30,
                        'endLine' => 30,
                        'startTokenPos' => 65,
                        'startFilePos' => 780,
                        'endTokenPos' => 65,
                        'endFilePos' => 780,
                    ],
                ],
                'docComment' => '/**
 * How many minutes constitute the "recent" window for order spikes.
 */',
                'attributes' => [
                ],
                'startLine' => 30,
                'endLine' => 30,
                'startColumn' => 5,
                'endColumn' => 35,
            ],
            'CACHE_TTL_SECONDS' => [
                'declaringClassName' => 'App\\Services\\AdminAlertService',
                'implementingClassName' => 'App\\Services\\AdminAlertService',
                'name' => 'CACHE_TTL_SECONDS',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '60',
                    'attributes' => [
                        'startLine' => 35,
                        'endLine' => 35,
                        'startTokenPos' => 76,
                        'startFilePos' => 908,
                        'endTokenPos' => 76,
                        'endFilePos' => 909,
                    ],
                ],
                'docComment' => '/**
 * Cache TTL (seconds) for alert checks — avoids repeated DB hits.
 */',
                'attributes' => [
                ],
                'startLine' => 35,
                'endLine' => 35,
                'startColumn' => 5,
                'endColumn' => 33,
            ],
        ],
        'immediateProperties' => [
        ],
        'immediateMethods' => [
            'checkOrderSpike' => [
                'name' => 'checkOrderSpike',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Check if order volume in the last SPIKE_WINDOW_MINUTES minutes is unusually high.
 * Returns true if an alert was raised.
 */',
                'startLine' => 43,
                'endLine' => 59,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'App\\Services',
                'declaringClassName' => 'App\\Services\\AdminAlertService',
                'implementingClassName' => 'App\\Services\\AdminAlertService',
                'currentClassName' => 'App\\Services\\AdminAlertService',
                'aliasName' => null,
            ],
            'checkTopupSpike' => [
                'name' => 'checkTopupSpike',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Check if pending top-up queue is unusually long.
 */',
                'startLine' => 64,
                'endLine' => 81,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'App\\Services',
                'declaringClassName' => 'App\\Services\\AdminAlertService',
                'implementingClassName' => 'App\\Services\\AdminAlertService',
                'currentClassName' => 'App\\Services\\AdminAlertService',
                'aliasName' => null,
            ],
            'runAll' => [
                'name' => 'runAll',
                'parameters' => [
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
                'docComment' => '/**
 * Run all spike checks. Called after order creation and top-up events.
 */',
                'startLine' => 86,
                'endLine' => 90,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'App\\Services',
                'declaringClassName' => 'App\\Services\\AdminAlertService',
                'implementingClassName' => 'App\\Services\\AdminAlertService',
                'currentClassName' => 'App\\Services\\AdminAlertService',
                'aliasName' => null,
            ],
            'alert' => [
                'name' => 'alert',
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
                        'startLine' => 94,
                        'endLine' => 94,
                        'startColumn' => 34,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'context' => [
                        'name' => 'context',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 94,
                                'endLine' => 94,
                                'startTokenPos' => 406,
                                'startFilePos' => 3093,
                                'endTokenPos' => 407,
                                'endFilePos' => 3094,
                            ],
                        ],
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
                        'startLine' => 94,
                        'endLine' => 94,
                        'startColumn' => 48,
                        'endColumn' => 66,
                        'parameterIndex' => 1,
                        'isOptional' => true,
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
                'docComment' => null,
                'startLine' => 94,
                'endLine' => 100,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'App\\Services',
                'declaringClassName' => 'App\\Services\\AdminAlertService',
                'implementingClassName' => 'App\\Services\\AdminAlertService',
                'currentClassName' => 'App\\Services\\AdminAlertService',
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
