<?php

declare(strict_types=1);

// odsl-C:\laragon\www\usk_no_ai\app\Http\Controllers\Admin\KitchenController.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Http\Controllers\Admin\KitchenController
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6.65.0.9-8.3.26-f6048823634453daf90fd4947daab2a7968773c9dda69bb487553f8b51d774ac',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'App\\Http\\Controllers\\Admin\\KitchenController',
                'filename' => 'C:/laragon/www/usk_no_ai/app/Http/Controllers/Admin/KitchenController.php',
            ],
        ],
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'name' => 'App\\Http\\Controllers\\Admin\\KitchenController',
        'shortName' => 'KitchenController',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 14,
        'endLine' => 151,
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
                'docComment' => '/** Halaman utama Kitchen Display System */',
                'startLine' => 17,
                'endLine' => 21,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Http\\Controllers\\Admin',
                'declaringClassName' => 'App\\Http\\Controllers\\Admin\\KitchenController',
                'implementingClassName' => 'App\\Http\\Controllers\\Admin\\KitchenController',
                'currentClassName' => 'App\\Http\\Controllers\\Admin\\KitchenController',
                'aliasName' => null,
            ],
            'stream' => [
                'name' => 'stream',
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
                        'startLine' => 33,
                        'endLine' => 33,
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
                        'name' => 'Symfony\\Component\\HttpFoundation\\StreamedResponse',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Server-Sent Events stream — kirim data board setiap 2 detik.
 *
 * Format event:
 *   event: board
 *   data: { orders: [...], stats: {...}, server_time: "14:32:01" }
 *
 *   event: ping
 *   data: { t: 1234567890 }   ← heartbeat agar proxy tidak memutus koneksi
 */',
                'startLine' => 33,
                'endLine' => 93,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Http\\Controllers\\Admin',
                'declaringClassName' => 'App\\Http\\Controllers\\Admin\\KitchenController',
                'implementingClassName' => 'App\\Http\\Controllers\\Admin\\KitchenController',
                'currentClassName' => 'App\\Http\\Controllers\\Admin\\KitchenController',
                'aliasName' => null,
            ],
            'sendEvent' => [
                'name' => 'sendEvent',
                'parameters' => [
                    'event' => [
                        'name' => 'event',
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
                        'startLine' => 97,
                        'endLine' => 97,
                        'startColumn' => 32,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'data' => [
                        'name' => 'data',
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
                        'startLine' => 97,
                        'endLine' => 97,
                        'startColumn' => 47,
                        'endColumn' => 57,
                        'parameterIndex' => 1,
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
                'startLine' => 97,
                'endLine' => 101,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'App\\Http\\Controllers\\Admin',
                'declaringClassName' => 'App\\Http\\Controllers\\Admin\\KitchenController',
                'implementingClassName' => 'App\\Http\\Controllers\\Admin\\KitchenController',
                'currentClassName' => 'App\\Http\\Controllers\\Admin\\KitchenController',
                'aliasName' => null,
            ],
            'serializeOrder' => [
                'name' => 'serializeOrder',
                'parameters' => [
                    'order' => [
                        'name' => 'order',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'App\\Models\\Order',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 108,
                        'endLine' => 108,
                        'startColumn' => 37,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'now' => [
                        'name' => 'now',
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
                        'startLine' => 108,
                        'endLine' => 108,
                        'startColumn' => 51,
                        'endColumn' => 61,
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
 * Serialisasi Order ke array untuk JSON.
 * Mengandung flag `is_priority` jika break_time mulai dalam ≤ 20 menit
 * ATAU order sudah dalam status preparing ≥ 10 menit.
 */',
                'startLine' => 108,
                'endLine' => 141,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'App\\Http\\Controllers\\Admin',
                'declaringClassName' => 'App\\Http\\Controllers\\Admin\\KitchenController',
                'implementingClassName' => 'App\\Http\\Controllers\\Admin\\KitchenController',
                'currentClassName' => 'App\\Http\\Controllers\\Admin\\KitchenController',
                'aliasName' => null,
            ],
            'buildStats' => [
                'name' => 'buildStats',
                'parameters' => [
                    'orders' => [
                        'name' => 'orders',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'object',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 143,
                        'endLine' => 143,
                        'startColumn' => 33,
                        'endColumn' => 46,
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
                'docComment' => null,
                'startLine' => 143,
                'endLine' => 150,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'App\\Http\\Controllers\\Admin',
                'declaringClassName' => 'App\\Http\\Controllers\\Admin\\KitchenController',
                'implementingClassName' => 'App\\Http\\Controllers\\Admin\\KitchenController',
                'currentClassName' => 'App\\Http\\Controllers\\Admin\\KitchenController',
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
