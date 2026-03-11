<?php

declare(strict_types=1);

// odsl-C:\laragon\www\usk_no_ai\app\Http\Controllers\Admin\QrScanController.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Http\Controllers\Admin\QrScanController
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6.65.0.9-8.3.26-463e1db212924901996a1c120f0513ee2a9bf6d99862de1bae5d59810807aeb3',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'App\\Http\\Controllers\\Admin\\QrScanController',
                'filename' => 'C:/laragon/www/usk_no_ai/app/Http/Controllers/Admin/QrScanController.php',
            ],
        ],
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'name' => 'App\\Http\\Controllers\\Admin\\QrScanController',
        'shortName' => 'QrScanController',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 14,
        'endLine' => 106,
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
                'docComment' => '/** Halaman scanner QR untuk admin */',
                'startLine' => 17,
                'endLine' => 20,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Http\\Controllers\\Admin',
                'declaringClassName' => 'App\\Http\\Controllers\\Admin\\QrScanController',
                'implementingClassName' => 'App\\Http\\Controllers\\Admin\\QrScanController',
                'currentClassName' => 'App\\Http\\Controllers\\Admin\\QrScanController',
                'aliasName' => null,
            ],
            'process' => [
                'name' => 'process',
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
                        'startLine' => 32,
                        'endLine' => 32,
                        'startColumn' => 29,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Illuminate\\Http\\JsonResponse',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Proses token QR yang di-scan admin.
 *
 * Flow:
 *  1. Cari OrderQr berdasarkan token (lockForUpdate mencegah double-scan).
 *  2. Validasi: belum dipakai, belum expired, status order harus \'ready\'.
 *  3. Tandai used_at = now() dan ubah status order → \'collected\'.
 *
 * @return JsonResponse  — dikonsumsi oleh JS pada halaman scan.
 */',
                'startLine' => 32,
                'endLine' => 105,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Http\\Controllers\\Admin',
                'declaringClassName' => 'App\\Http\\Controllers\\Admin\\QrScanController',
                'implementingClassName' => 'App\\Http\\Controllers\\Admin\\QrScanController',
                'currentClassName' => 'App\\Http\\Controllers\\Admin\\QrScanController',
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
