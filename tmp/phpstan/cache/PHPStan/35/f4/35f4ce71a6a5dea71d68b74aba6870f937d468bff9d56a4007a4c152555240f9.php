<?php

declare(strict_types=1);

// odsl-C:\laragon\www\usk_no_ai\app\Http\Controllers\Admin\HealthController.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Http\Controllers\Admin\HealthController
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6.65.0.9-8.3.26-3084c63dafdca23a0de5eb4c4e3ecb7124c5bc1eb53096ebd04d2476e1a01f05',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'App\\Http\\Controllers\\Admin\\HealthController',
                'filename' => 'C:/laragon/www/usk_no_ai/app/Http/Controllers/Admin/HealthController.php',
            ],
        ],
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'name' => 'App\\Http\\Controllers\\Admin\\HealthController',
        'shortName' => 'HealthController',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 14,
        'endLine' => 67,
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
            'health' => [
                'declaringClassName' => 'App\\Http\\Controllers\\Admin\\HealthController',
                'implementingClassName' => 'App\\Http\\Controllers\\Admin\\HealthController',
                'name' => 'health',
                'modifiers' => 4,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'App\\Services\\HealthCheckService',
                        'isIdentifier' => false,
                    ],
                ],
                'default' => null,
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 17,
                'endLine' => 17,
                'startColumn' => 9,
                'endColumn' => 42,
                'isPromoted' => true,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'sentry' => [
                'declaringClassName' => 'App\\Http\\Controllers\\Admin\\HealthController',
                'implementingClassName' => 'App\\Http\\Controllers\\Admin\\HealthController',
                'name' => 'sentry',
                'modifiers' => 4,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'App\\Services\\SentryService',
                        'isIdentifier' => false,
                    ],
                ],
                'default' => null,
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 18,
                'endLine' => 18,
                'startColumn' => 9,
                'endColumn' => 37,
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
                    'health' => [
                        'name' => 'health',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'App\\Services\\HealthCheckService',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => true,
                        'attributes' => [
                        ],
                        'startLine' => 17,
                        'endLine' => 17,
                        'startColumn' => 9,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'sentry' => [
                        'name' => 'sentry',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'App\\Services\\SentryService',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => true,
                        'attributes' => [
                        ],
                        'startLine' => 18,
                        'endLine' => 18,
                        'startColumn' => 9,
                        'endColumn' => 37,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 16,
                'endLine' => 19,
                'startColumn' => 5,
                'endColumn' => 8,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Http\\Controllers\\Admin',
                'declaringClassName' => 'App\\Http\\Controllers\\Admin\\HealthController',
                'implementingClassName' => 'App\\Http\\Controllers\\Admin\\HealthController',
                'currentClassName' => 'App\\Http\\Controllers\\Admin\\HealthController',
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
                        'name' => 'Illuminate\\View\\View',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 21,
                'endLine' => 38,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Http\\Controllers\\Admin',
                'declaringClassName' => 'App\\Http\\Controllers\\Admin\\HealthController',
                'implementingClassName' => 'App\\Http\\Controllers\\Admin\\HealthController',
                'currentClassName' => 'App\\Http\\Controllers\\Admin\\HealthController',
                'aliasName' => null,
            ],
            'triggerTestException' => [
                'name' => 'triggerTestException',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Illuminate\\Http\\RedirectResponse',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Trigger a test exception and send it to Sentry.
 * Only super admins may call this to avoid accidental noise.
 */',
                'startLine' => 44,
                'endLine' => 66,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Http\\Controllers\\Admin',
                'declaringClassName' => 'App\\Http\\Controllers\\Admin\\HealthController',
                'implementingClassName' => 'App\\Http\\Controllers\\Admin\\HealthController',
                'currentClassName' => 'App\\Http\\Controllers\\Admin\\HealthController',
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
