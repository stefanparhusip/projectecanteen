<?php

declare(strict_types=1);

// odsl-C:\laragon\www\usk_no_ai\app\Models\Menu.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Models\Menu
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6.65.0.9-8.3.26-ebfa3a9e8111b352def0641cf6af2893a90e0506ccf025c91d94ee7956e97a90',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'App\\Models\\Menu',
                'filename' => 'C:/laragon/www/usk_no_ai/app/Models/Menu.php',
            ],
        ],
        'namespace' => 'App\\Models',
        'name' => 'App\\Models\\Menu',
        'shortName' => 'Menu',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 10,
        'endLine' => 97,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'fillable' => [
                'declaringClassName' => 'App\\Models\\Menu',
                'implementingClassName' => 'App\\Models\\Menu',
                'name' => 'fillable',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[\'category_id\', \'name\', \'price\', \'stock\', \'default_stock\', \'low_stock_threshold\', \'auto_restock_enabled\', \'image_url\']',
                    'attributes' => [
                        'startLine' => 14,
                        'endLine' => 23,
                        'startTokenPos' => 48,
                        'startFilePos' => 311,
                        'endTokenPos' => 74,
                        'endFilePos' => 508,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 14,
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
                'endLine' => 34,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'App\\Models',
                'declaringClassName' => 'App\\Models\\Menu',
                'implementingClassName' => 'App\\Models\\Menu',
                'currentClassName' => 'App\\Models\\Menu',
                'aliasName' => null,
            ],
            'getIsAvailableAttribute' => [
                'name' => 'getIsAvailableAttribute',
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
 * Accessor: $menu->is_available
 * Digunakan di view/query warisan — true jika stock > 0.
 */',
                'startLine' => 42,
                'endLine' => 45,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Models',
                'declaringClassName' => 'App\\Models\\Menu',
                'implementingClassName' => 'App\\Models\\Menu',
                'currentClassName' => 'App\\Models\\Menu',
                'aliasName' => null,
            ],
            'getStatusAttribute' => [
                'name' => 'getStatusAttribute',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Accessor: $menu->status  → "Tersedia" | "Habis"
 */',
                'startLine' => 50,
                'endLine' => 53,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Models',
                'declaringClassName' => 'App\\Models\\Menu',
                'implementingClassName' => 'App\\Models\\Menu',
                'currentClassName' => 'App\\Models\\Menu',
                'aliasName' => null,
            ],
            'isAvailable' => [
                'name' => 'isAvailable',
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
 * Kembalikan true jika menu masih memiliki stok tersisa.
 */',
                'startLine' => 58,
                'endLine' => 61,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Models',
                'declaringClassName' => 'App\\Models\\Menu',
                'implementingClassName' => 'App\\Models\\Menu',
                'currentClassName' => 'App\\Models\\Menu',
                'aliasName' => null,
            ],
            'isLowStock' => [
                'name' => 'isLowStock',
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
 * True if stock is at or below the configured low-stock threshold.
 */',
                'startLine' => 66,
                'endLine' => 70,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Models',
                'declaringClassName' => 'App\\Models\\Menu',
                'implementingClassName' => 'App\\Models\\Menu',
                'currentClassName' => 'App\\Models\\Menu',
                'aliasName' => null,
            ],
            'category' => [
                'name' => 'category',
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
                'docComment' => '/** Kategori dari menu ini */',
                'startLine' => 75,
                'endLine' => 78,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Models',
                'declaringClassName' => 'App\\Models\\Menu',
                'implementingClassName' => 'App\\Models\\Menu',
                'currentClassName' => 'App\\Models\\Menu',
                'aliasName' => null,
            ],
            'orderItems' => [
                'name' => 'orderItems',
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
                'docComment' => '/** Item pesanan yang memuat menu ini */',
                'startLine' => 81,
                'endLine' => 84,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Models',
                'declaringClassName' => 'App\\Models\\Menu',
                'implementingClassName' => 'App\\Models\\Menu',
                'currentClassName' => 'App\\Models\\Menu',
                'aliasName' => null,
            ],
            'stockAlerts' => [
                'name' => 'stockAlerts',
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
                'docComment' => '/** Semua alert stok rendah untuk menu ini */',
                'startLine' => 87,
                'endLine' => 90,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Models',
                'declaringClassName' => 'App\\Models\\Menu',
                'implementingClassName' => 'App\\Models\\Menu',
                'currentClassName' => 'App\\Models\\Menu',
                'aliasName' => null,
            ],
            'restockRequests' => [
                'name' => 'restockRequests',
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
                'docComment' => '/** Semua permintaan restock untuk menu ini */',
                'startLine' => 93,
                'endLine' => 96,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Models',
                'declaringClassName' => 'App\\Models\\Menu',
                'implementingClassName' => 'App\\Models\\Menu',
                'currentClassName' => 'App\\Models\\Menu',
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
