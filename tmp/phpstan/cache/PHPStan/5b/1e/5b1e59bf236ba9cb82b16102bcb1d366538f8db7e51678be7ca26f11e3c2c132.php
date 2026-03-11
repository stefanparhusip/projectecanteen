<?php

declare(strict_types=1);

// odsl-C:\laragon\www\usk_no_ai\app\Jobs\DispatchWebhookJob.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Jobs\DispatchWebhookJob
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6.65.0.9-8.3.26-b0c2c567544545e0823031f899d805ed9ec24940fc3ed3a4ab2a3936437953d3',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'App\\Jobs\\DispatchWebhookJob',
                'filename' => 'C:/laragon/www/usk_no_ai/app/Jobs/DispatchWebhookJob.php',
            ],
        ],
        'namespace' => 'App\\Jobs',
        'name' => 'App\\Jobs\\DispatchWebhookJob',
        'shortName' => 'DispatchWebhookJob',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * Delivers a single webhook call with HMAC-SHA256 signing and automatic retries.
 *
 * Retry schedule (seconds): 30 → 60 → 120 → 300 → 600
 * After 5 failures the job is marked as failed.
 */',
        'attributes' => [
        ],
        'startLine' => 20,
        'endLine' => 72,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
            0 => 'Illuminate\\Contracts\\Queue\\ShouldQueue',
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Foundation\\Bus\\Dispatchable',
            1 => 'Illuminate\\Queue\\InteractsWithQueue',
            2 => 'Illuminate\\Bus\\Queueable',
            3 => 'Illuminate\\Queue\\SerializesModels',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'tries' => [
                'declaringClassName' => 'App\\Jobs\\DispatchWebhookJob',
                'implementingClassName' => 'App\\Jobs\\DispatchWebhookJob',
                'name' => 'tries',
                'modifiers' => 1,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'int',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => [
                    'code' => '5',
                    'attributes' => [
                        'startLine' => 24,
                        'endLine' => 24,
                        'startTokenPos' => 81,
                        'startFilePos' => 700,
                        'endTokenPos' => 81,
                        'endFilePos' => 700,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 24,
                'endLine' => 24,
                'startColumn' => 5,
                'endColumn' => 28,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'timeout' => [
                'declaringClassName' => 'App\\Jobs\\DispatchWebhookJob',
                'implementingClassName' => 'App\\Jobs\\DispatchWebhookJob',
                'name' => 'timeout',
                'modifiers' => 1,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'int',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => [
                    'code' => '30',
                    'attributes' => [
                        'startLine' => 25,
                        'endLine' => 25,
                        'startTokenPos' => 92,
                        'startFilePos' => 730,
                        'endTokenPos' => 92,
                        'endFilePos' => 731,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 25,
                'endLine' => 25,
                'startColumn' => 5,
                'endColumn' => 29,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'webhook' => [
                'declaringClassName' => 'App\\Jobs\\DispatchWebhookJob',
                'implementingClassName' => 'App\\Jobs\\DispatchWebhookJob',
                'name' => 'webhook',
                'modifiers' => 132,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'App\\Models\\Webhook',
                        'isIdentifier' => false,
                    ],
                ],
                'default' => null,
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 28,
                'endLine' => 28,
                'startColumn' => 9,
                'endColumn' => 41,
                'isPromoted' => true,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'eventName' => [
                'declaringClassName' => 'App\\Jobs\\DispatchWebhookJob',
                'implementingClassName' => 'App\\Jobs\\DispatchWebhookJob',
                'name' => 'eventName',
                'modifiers' => 132,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => null,
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 29,
                'endLine' => 29,
                'startColumn' => 9,
                'endColumn' => 43,
                'isPromoted' => true,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'eventPayload' => [
                'declaringClassName' => 'App\\Jobs\\DispatchWebhookJob',
                'implementingClassName' => 'App\\Jobs\\DispatchWebhookJob',
                'name' => 'eventPayload',
                'modifiers' => 132,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => null,
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 30,
                'endLine' => 30,
                'startColumn' => 9,
                'endColumn' => 46,
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
                    'webhook' => [
                        'name' => 'webhook',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'App\\Models\\Webhook',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => true,
                        'attributes' => [
                        ],
                        'startLine' => 28,
                        'endLine' => 28,
                        'startColumn' => 9,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'eventName' => [
                        'name' => 'eventName',
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
                        'isPromoted' => true,
                        'attributes' => [
                        ],
                        'startLine' => 29,
                        'endLine' => 29,
                        'startColumn' => 9,
                        'endColumn' => 43,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'eventPayload' => [
                        'name' => 'eventPayload',
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
                        'isPromoted' => true,
                        'attributes' => [
                        ],
                        'startLine' => 30,
                        'endLine' => 30,
                        'startColumn' => 9,
                        'endColumn' => 46,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 27,
                'endLine' => 31,
                'startColumn' => 5,
                'endColumn' => 8,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Jobs',
                'declaringClassName' => 'App\\Jobs\\DispatchWebhookJob',
                'implementingClassName' => 'App\\Jobs\\DispatchWebhookJob',
                'currentClassName' => 'App\\Jobs\\DispatchWebhookJob',
                'aliasName' => null,
            ],
            'backoff' => [
                'name' => 'backoff',
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
                'docComment' => '/** Back-off in seconds between retries */',
                'startLine' => 34,
                'endLine' => 37,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Jobs',
                'declaringClassName' => 'App\\Jobs\\DispatchWebhookJob',
                'implementingClassName' => 'App\\Jobs\\DispatchWebhookJob',
                'currentClassName' => 'App\\Jobs\\DispatchWebhookJob',
                'aliasName' => null,
            ],
            'handle' => [
                'name' => 'handle',
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
                'docComment' => null,
                'startLine' => 39,
                'endLine' => 59,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Jobs',
                'declaringClassName' => 'App\\Jobs\\DispatchWebhookJob',
                'implementingClassName' => 'App\\Jobs\\DispatchWebhookJob',
                'currentClassName' => 'App\\Jobs\\DispatchWebhookJob',
                'aliasName' => null,
            ],
            'failed' => [
                'name' => 'failed',
                'parameters' => [
                    'e' => [
                        'name' => 'e',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Throwable',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 61,
                        'endLine' => 61,
                        'startColumn' => 28,
                        'endColumn' => 40,
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
                'docComment' => null,
                'startLine' => 61,
                'endLine' => 64,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Jobs',
                'declaringClassName' => 'App\\Jobs\\DispatchWebhookJob',
                'implementingClassName' => 'App\\Jobs\\DispatchWebhookJob',
                'currentClassName' => 'App\\Jobs\\DispatchWebhookJob',
                'aliasName' => null,
            ],
            'getBackoffForAttempt' => [
                'name' => 'getBackoffForAttempt',
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
                'startLine' => 66,
                'endLine' => 71,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'App\\Jobs',
                'declaringClassName' => 'App\\Jobs\\DispatchWebhookJob',
                'implementingClassName' => 'App\\Jobs\\DispatchWebhookJob',
                'currentClassName' => 'App\\Jobs\\DispatchWebhookJob',
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
