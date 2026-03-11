<?php

declare(strict_types=1);

// odsl-C:\laragon\www\usk_no_ai\app\Models\User.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Models\User
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6.65.0.9-8.3.26-c097dc9bbd9245f35bb4a63e22b044849d8d4851fc7b44b5d45ae09a2360b059',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'App\\Models\\User',
                'filename' => 'C:/laragon/www/usk_no_ai/app/Models/User.php',
            ],
        ],
        'namespace' => 'App\\Models',
        'name' => 'App\\Models\\User',
        'shortName' => 'User',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 13,
        'endLine' => 81,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Illuminate\\Foundation\\Auth\\User',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
            1 => 'Illuminate\\Notifications\\Notifiable',
            2 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
            3 => 'Laravel\\Sanctum\\HasApiTokens',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'fillable' => [
                'declaringClassName' => 'App\\Models\\User',
                'implementingClassName' => 'App\\Models\\User',
                'name' => 'fillable',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[\'name\', \'email\', \'password\', \'role\', \'is_super_admin\', \'balance\', \'points_balance\']',
                    'attributes' => [
                        'startLine' => 18,
                        'endLine' => 26,
                        'startTokenPos' => 75,
                        'startFilePos' => 548,
                        'endTokenPos' => 98,
                        'endFilePos' => 694,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 18,
                'endLine' => 26,
                'startColumn' => 5,
                'endColumn' => 6,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'hidden' => [
                'declaringClassName' => 'App\\Models\\User',
                'implementingClassName' => 'App\\Models\\User',
                'name' => 'hidden',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[\'password\', \'remember_token\']',
                    'attributes' => [
                        'startLine' => 28,
                        'endLine' => 31,
                        'startTokenPos' => 107,
                        'startFilePos' => 722,
                        'endTokenPos' => 115,
                        'endFilePos' => 774,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 28,
                'endLine' => 31,
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
                'startLine' => 33,
                'endLine' => 42,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'App\\Models',
                'declaringClassName' => 'App\\Models\\User',
                'implementingClassName' => 'App\\Models\\User',
                'currentClassName' => 'App\\Models\\User',
                'aliasName' => null,
            ],
            'isAdmin' => [
                'name' => 'isAdmin',
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
                'startLine' => 46,
                'endLine' => 49,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Models',
                'declaringClassName' => 'App\\Models\\User',
                'implementingClassName' => 'App\\Models\\User',
                'currentClassName' => 'App\\Models\\User',
                'aliasName' => null,
            ],
            'isSuperAdmin' => [
                'name' => 'isSuperAdmin',
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
                'startLine' => 51,
                'endLine' => 54,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Models',
                'declaringClassName' => 'App\\Models\\User',
                'implementingClassName' => 'App\\Models\\User',
                'currentClassName' => 'App\\Models\\User',
                'aliasName' => null,
            ],
            'orders' => [
                'name' => 'orders',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/** Semua pesanan milik user ini */',
                'startLine' => 59,
                'endLine' => 62,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Models',
                'declaringClassName' => 'App\\Models\\User',
                'implementingClassName' => 'App\\Models\\User',
                'currentClassName' => 'App\\Models\\User',
                'aliasName' => null,
            ],
            'balanceTransactions' => [
                'name' => 'balanceTransactions',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/** Semua mutasi saldo milik user ini */',
                'startLine' => 65,
                'endLine' => 68,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Models',
                'declaringClassName' => 'App\\Models\\User',
                'implementingClassName' => 'App\\Models\\User',
                'currentClassName' => 'App\\Models\\User',
                'aliasName' => null,
            ],
            'pointTransactions' => [
                'name' => 'pointTransactions',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/** Semua mutasi poin milik user ini */',
                'startLine' => 71,
                'endLine' => 74,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Models',
                'declaringClassName' => 'App\\Models\\User',
                'implementingClassName' => 'App\\Models\\User',
                'currentClassName' => 'App\\Models\\User',
                'aliasName' => null,
            ],
            'featureFlagOverrides' => [
                'name' => 'featureFlagOverrides',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/** Semua override feature flag untuk user ini */',
                'startLine' => 77,
                'endLine' => 80,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Models',
                'declaringClassName' => 'App\\Models\\User',
                'implementingClassName' => 'App\\Models\\User',
                'currentClassName' => 'App\\Models\\User',
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
