<?php

declare(strict_types=1);

// odsl-C:\laragon\www\usk_no_ai\app\Models\ImpersonationLog.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Models\ImpersonationLog
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6.65.0.9-8.3.26-c194edfd714b82a38886246eb5e173efa7d92691b504a8346bb066ff5a0001b3',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'App\\Models\\ImpersonationLog',
                'filename' => 'C:/laragon/www/usk_no_ai/app/Models/ImpersonationLog.php',
            ],
        ],
        'namespace' => 'App\\Models',
        'name' => 'App\\Models\\ImpersonationLog',
        'shortName' => 'ImpersonationLog',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * Immutable audit record of every impersonation session.
 *
 * Records are never updated or deleted — only ended_at is stamped
 * when the admin reverts back to their own session.
 */',
        'attributes' => [
        ],
        'startLine' => 14,
        'endLine' => 51,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'fillable' => [
                'declaringClassName' => 'App\\Models\\ImpersonationLog',
                'implementingClassName' => 'App\\Models\\ImpersonationLog',
                'name' => 'fillable',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[\'impersonator_id\', \'target_user_id\', \'ip_address\', \'user_agent\', \'started_at\', \'ended_at\']',
                    'attributes' => [
                        'startLine' => 16,
                        'endLine' => 23,
                        'startTokenPos' => 35,
                        'startFilePos' => 396,
                        'endTokenPos' => 55,
                        'endFilePos' => 548,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 16,
                'endLine' => 23,
                'startColumn' => 5,
                'endColumn' => 6,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
        ],
        'immediateMethods' => [
            'casts' => [
                'name' => 'casts',
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
                'startLine' => 25,
                'endLine' => 31,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'App\\Models',
                'declaringClassName' => 'App\\Models\\ImpersonationLog',
                'implementingClassName' => 'App\\Models\\ImpersonationLog',
                'currentClassName' => 'App\\Models\\ImpersonationLog',
                'aliasName' => null,
            ],
            'impersonator' => [
                'name' => 'impersonator',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 35,
                'endLine' => 38,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Models',
                'declaringClassName' => 'App\\Models\\ImpersonationLog',
                'implementingClassName' => 'App\\Models\\ImpersonationLog',
                'currentClassName' => 'App\\Models\\ImpersonationLog',
                'aliasName' => null,
            ],
            'target' => [
                'name' => 'target',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 40,
                'endLine' => 43,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Models',
                'declaringClassName' => 'App\\Models\\ImpersonationLog',
                'implementingClassName' => 'App\\Models\\ImpersonationLog',
                'currentClassName' => 'App\\Models\\ImpersonationLog',
                'aliasName' => null,
            ],
            'isActive' => [
                'name' => 'isActive',
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
                'docComment' => null,
                'startLine' => 47,
                'endLine' => 50,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Models',
                'declaringClassName' => 'App\\Models\\ImpersonationLog',
                'implementingClassName' => 'App\\Models\\ImpersonationLog',
                'currentClassName' => 'App\\Models\\ImpersonationLog',
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
