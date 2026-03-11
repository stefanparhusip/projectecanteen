<?php

declare(strict_types=1);

// odsl-C:\laragon\www\usk_no_ai\app\Http\Controllers\Admin\TransactionController.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Http\Controllers\Admin\TransactionController
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6.65.0.9-8.3.26-f1ff4f291b5cb1c3a1e6a819e4a81779b038f5050cd35e67e15ff93a776a6ba2',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'App\\Http\\Controllers\\Admin\\TransactionController',
                'filename' => 'C:/laragon/www/usk_no_ai/app/Http/Controllers/Admin/TransactionController.php',
            ],
        ],
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'name' => 'App\\Http\\Controllers\\Admin\\TransactionController',
        'shortName' => 'TransactionController',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 15,
        'endLine' => 183,
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
        ],
        'immediateMethods' => [
            'index' => [
                'name' => 'index',
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
                        'startLine' => 19,
                        'endLine' => 19,
                        'startColumn' => 27,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
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
                'startLine' => 19,
                'endLine' => 61,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Http\\Controllers\\Admin',
                'declaringClassName' => 'App\\Http\\Controllers\\Admin\\TransactionController',
                'implementingClassName' => 'App\\Http\\Controllers\\Admin\\TransactionController',
                'currentClassName' => 'App\\Http\\Controllers\\Admin\\TransactionController',
                'aliasName' => null,
            ],
            'export' => [
                'name' => 'export',
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
                        'startLine' => 65,
                        'endLine' => 65,
                        'startColumn' => 28,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
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
                'startLine' => 65,
                'endLine' => 105,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Http\\Controllers\\Admin',
                'declaringClassName' => 'App\\Http\\Controllers\\Admin\\TransactionController',
                'implementingClassName' => 'App\\Http\\Controllers\\Admin\\TransactionController',
                'currentClassName' => 'App\\Http\\Controllers\\Admin\\TransactionController',
                'aliasName' => null,
            ],
            'bulkRefundIndex' => [
                'name' => 'bulkRefundIndex',
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
                        'startLine' => 113,
                        'endLine' => 113,
                        'startColumn' => 37,
                        'endColumn' => 52,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
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
                'docComment' => '/**
 * Tampilkan daftar pesanan yang bisa di-refund secara massal.
 * Eligible: pesanan berstatus pending/preparing (belum ready/cancelled/collected).
 */',
                'startLine' => 113,
                'endLine' => 121,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Http\\Controllers\\Admin',
                'declaringClassName' => 'App\\Http\\Controllers\\Admin\\TransactionController',
                'implementingClassName' => 'App\\Http\\Controllers\\Admin\\TransactionController',
                'currentClassName' => 'App\\Http\\Controllers\\Admin\\TransactionController',
                'aliasName' => null,
            ],
            'bulkRefundProcess' => [
                'name' => 'bulkRefundProcess',
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
                        'startLine' => 129,
                        'endLine' => 129,
                        'startColumn' => 39,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
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
 * Proses bulk refund: cancel semua order yang dipilih dan kembalikan saldo.
 *
 * Setiap order diproses dalam sub-transaction indivisible.
 * Jika satu order gagal (misalnya sudah di-cancel), yang lain tetap diproses.
 */',
                'startLine' => 129,
                'endLine' => 182,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Http\\Controllers\\Admin',
                'declaringClassName' => 'App\\Http\\Controllers\\Admin\\TransactionController',
                'implementingClassName' => 'App\\Http\\Controllers\\Admin\\TransactionController',
                'currentClassName' => 'App\\Http\\Controllers\\Admin\\TransactionController',
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
