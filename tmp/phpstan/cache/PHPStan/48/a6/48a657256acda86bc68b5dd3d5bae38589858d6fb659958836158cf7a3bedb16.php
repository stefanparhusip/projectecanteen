<?php

declare(strict_types=1);

// odsl-C:\laragon\www\usk_no_ai\app\Http\Middleware\CheckFeatureFlag.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Http\Middleware\CheckFeatureFlag
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6.65.0.9-8.3.26-9d645bbde945c15b352b1bfd0f526a7f76061e295229e89081576faf3f0c3d2b',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'App\\Http\\Middleware\\CheckFeatureFlag',
                'filename' => 'C:/laragon/www/usk_no_ai/app/Http/Middleware/CheckFeatureFlag.php',
            ],
        ],
        'namespace' => 'App\\Http\\Middleware',
        'name' => 'App\\Http\\Middleware\\CheckFeatureFlag',
        'shortName' => 'CheckFeatureFlag',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * Gate a route behind a feature flag.
 *
 * Usage:  ->middleware(\'feature:flag-key\')
 *
 * Responds with 404 — not 403 — so the feature\'s existence is not disclosed.
 */',
        'attributes' => [
        ],
        'startLine' => 17,
        'endLine' => 31,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'flags' => [
                'declaringClassName' => 'App\\Http\\Middleware\\CheckFeatureFlag',
                'implementingClassName' => 'App\\Http\\Middleware\\CheckFeatureFlag',
                'name' => 'flags',
                'modifiers' => 4,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'App\\Services\\FeatureFlagService',
                        'isIdentifier' => false,
                    ],
                ],
                'default' => null,
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 19,
                'endLine' => 19,
                'startColumn' => 33,
                'endColumn' => 65,
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
                    'flags' => [
                        'name' => 'flags',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'App\\Services\\FeatureFlagService',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => true,
                        'attributes' => [
                        ],
                        'startLine' => 19,
                        'endLine' => 19,
                        'startColumn' => 33,
                        'endColumn' => 65,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 19,
                'endLine' => 19,
                'startColumn' => 5,
                'endColumn' => 69,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Http\\Middleware',
                'declaringClassName' => 'App\\Http\\Middleware\\CheckFeatureFlag',
                'implementingClassName' => 'App\\Http\\Middleware\\CheckFeatureFlag',
                'currentClassName' => 'App\\Http\\Middleware\\CheckFeatureFlag',
                'aliasName' => null,
            ],
            'handle' => [
                'name' => 'handle',
                'parameters' => [
                    'request' => [
                        'name' => 'request',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Http\\Request',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 21,
                        'endLine' => 21,
                        'startColumn' => 28,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'next' => [
                        'name' => 'next',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Closure',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 21,
                        'endLine' => 21,
                        'startColumn' => 46,
                        'endColumn' => 58,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'flagKey' => [
                        'name' => 'flagKey',
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
                        'startLine' => 21,
                        'endLine' => 21,
                        'startColumn' => 61,
                        'endColumn' => 75,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Symfony\\Component\\HttpFoundation\\Response',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 21,
                'endLine' => 30,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Http\\Middleware',
                'declaringClassName' => 'App\\Http\\Middleware\\CheckFeatureFlag',
                'implementingClassName' => 'App\\Http\\Middleware\\CheckFeatureFlag',
                'currentClassName' => 'App\\Http\\Middleware\\CheckFeatureFlag',
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
