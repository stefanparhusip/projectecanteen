<?php

declare(strict_types=1);

// odsl-C:\laragon\www\usk_no_ai\app\Http\Controllers\Admin\CategoryController.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Http\Controllers\Admin\CategoryController
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6.65.0.9-8.3.26-a912f74204fe5a0888bcbde53a02d8f86cc9f8c8793092092a237bb3f1fd494c',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'App\\Http\\Controllers\\Admin\\CategoryController',
                'filename' => 'C:/laragon/www/usk_no_ai/app/Http/Controllers/Admin/CategoryController.php',
            ],
        ],
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'name' => 'App\\Http\\Controllers\\Admin\\CategoryController',
        'shortName' => 'CategoryController',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 11,
        'endLine' => 107,
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
 * Daftar semua kategori beserta jumlah menu yang dimiliki.
 */',
                'startLine' => 16,
                'endLine' => 23,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Http\\Controllers\\Admin',
                'declaringClassName' => 'App\\Http\\Controllers\\Admin\\CategoryController',
                'implementingClassName' => 'App\\Http\\Controllers\\Admin\\CategoryController',
                'currentClassName' => 'App\\Http\\Controllers\\Admin\\CategoryController',
                'aliasName' => null,
            ],
            'create' => [
                'name' => 'create',
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
                'docComment' => '/**
 * Form tambah kategori baru.
 */',
                'startLine' => 28,
                'endLine' => 31,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Http\\Controllers\\Admin',
                'declaringClassName' => 'App\\Http\\Controllers\\Admin\\CategoryController',
                'implementingClassName' => 'App\\Http\\Controllers\\Admin\\CategoryController',
                'currentClassName' => 'App\\Http\\Controllers\\Admin\\CategoryController',
                'aliasName' => null,
            ],
            'show' => [
                'name' => 'show',
                'parameters' => [
                    'category' => [
                        'name' => 'category',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'App\\Models\\Category',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 37,
                        'endLine' => 37,
                        'startColumn' => 26,
                        'endColumn' => 43,
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
 * Route GET /categories/{category} — redirect ke halaman edit.
 * View "show" tidak diperlukan untuk resource internal admin.
 */',
                'startLine' => 37,
                'endLine' => 40,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Http\\Controllers\\Admin',
                'declaringClassName' => 'App\\Http\\Controllers\\Admin\\CategoryController',
                'implementingClassName' => 'App\\Http\\Controllers\\Admin\\CategoryController',
                'currentClassName' => 'App\\Http\\Controllers\\Admin\\CategoryController',
                'aliasName' => null,
            ],
            'store' => [
                'name' => 'store',
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
                        'startLine' => 45,
                        'endLine' => 45,
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
                        'name' => 'Illuminate\\Http\\RedirectResponse',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Simpan kategori baru.
 */',
                'startLine' => 45,
                'endLine' => 59,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Http\\Controllers\\Admin',
                'declaringClassName' => 'App\\Http\\Controllers\\Admin\\CategoryController',
                'implementingClassName' => 'App\\Http\\Controllers\\Admin\\CategoryController',
                'currentClassName' => 'App\\Http\\Controllers\\Admin\\CategoryController',
                'aliasName' => null,
            ],
            'edit' => [
                'name' => 'edit',
                'parameters' => [
                    'category' => [
                        'name' => 'category',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'App\\Models\\Category',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 64,
                        'endLine' => 64,
                        'startColumn' => 26,
                        'endColumn' => 43,
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
 * Form edit kategori.
 */',
                'startLine' => 64,
                'endLine' => 67,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Http\\Controllers\\Admin',
                'declaringClassName' => 'App\\Http\\Controllers\\Admin\\CategoryController',
                'implementingClassName' => 'App\\Http\\Controllers\\Admin\\CategoryController',
                'currentClassName' => 'App\\Http\\Controllers\\Admin\\CategoryController',
                'aliasName' => null,
            ],
            'update' => [
                'name' => 'update',
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
                        'startLine' => 72,
                        'endLine' => 72,
                        'startColumn' => 28,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'category' => [
                        'name' => 'category',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'App\\Models\\Category',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 72,
                        'endLine' => 72,
                        'startColumn' => 46,
                        'endColumn' => 63,
                        'parameterIndex' => 1,
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
 * Simpan perubahan kategori.
 */',
                'startLine' => 72,
                'endLine' => 86,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Http\\Controllers\\Admin',
                'declaringClassName' => 'App\\Http\\Controllers\\Admin\\CategoryController',
                'implementingClassName' => 'App\\Http\\Controllers\\Admin\\CategoryController',
                'currentClassName' => 'App\\Http\\Controllers\\Admin\\CategoryController',
                'aliasName' => null,
            ],
            'destroy' => [
                'name' => 'destroy',
                'parameters' => [
                    'category' => [
                        'name' => 'category',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'App\\Models\\Category',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 92,
                        'endLine' => 92,
                        'startColumn' => 29,
                        'endColumn' => 46,
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
 * Hapus kategori.
 * Guard: tidak bisa dihapus jika masih ada menu yang menggunakannya.
 */',
                'startLine' => 92,
                'endLine' => 106,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Http\\Controllers\\Admin',
                'declaringClassName' => 'App\\Http\\Controllers\\Admin\\CategoryController',
                'implementingClassName' => 'App\\Http\\Controllers\\Admin\\CategoryController',
                'currentClassName' => 'App\\Http\\Controllers\\Admin\\CategoryController',
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
