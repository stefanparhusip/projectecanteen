<?php

declare(strict_types=1);

// odsl-C:\laragon\www\usk_no_ai\app\Models\BreakTime.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Models\BreakTime
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6.65.0.9-8.3.26-7220385a53ffc43ca83b5866fb517da78f3b5583453b7e950d3d6819ac4f49c9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'App\\Models\\BreakTime',
                'filename' => 'C:/laragon/www/usk_no_ai/app/Models/BreakTime.php',
            ],
        ],
        'namespace' => 'App\\Models',
        'name' => 'App\\Models\\BreakTime',
        'shortName' => 'BreakTime',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 9,
        'endLine' => 66,
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
                'declaringClassName' => 'App\\Models\\BreakTime',
                'implementingClassName' => 'App\\Models\\BreakTime',
                'name' => 'fillable',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[\'label\', \'start_time\', \'end_time\', \'order_deadline\']',
                    'attributes' => [
                        'startLine' => 11,
                        'endLine' => 16,
                        'startTokenPos' => 38,
                        'startFilePos' => 210,
                        'endTokenPos' => 52,
                        'endFilePos' => 306,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 11,
                'endLine' => 16,
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
                'docComment' => '/**
 * Cast kolom waktu ke Carbon agar konsisten bisa dipanggil ->format(\'H:i\').
 * Carbon::parse() pada string waktu \'07:00:00\' menghasilkan Carbon yang valid.
 */',
                'startLine' => 22,
                'endLine' => 29,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'App\\Models',
                'declaringClassName' => 'App\\Models\\BreakTime',
                'implementingClassName' => 'App\\Models\\BreakTime',
                'currentClassName' => 'App\\Models\\BreakTime',
                'aliasName' => null,
            ],
            'canOrder' => [
                'name' => 'canOrder',
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
 * Cek apakah slot ini masih bisa dipesan saat ini.
 *
 * Syarat:
 *  1. Waktu sekarang >= 07:00 (jam buka pemesanan)
 *  2. Waktu sekarang <= order_deadline slot ini
 */',
                'startLine' => 40,
                'endLine' => 49,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Models',
                'declaringClassName' => 'App\\Models\\BreakTime',
                'implementingClassName' => 'App\\Models\\BreakTime',
                'currentClassName' => 'App\\Models\\BreakTime',
                'aliasName' => null,
            ],
            'deadlineToday' => [
                'name' => 'deadlineToday',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Carbon\\Carbon',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Kembalikan Carbon deadline hari ini untuk slot ini.
 */',
                'startLine' => 54,
                'endLine' => 57,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Models',
                'declaringClassName' => 'App\\Models\\BreakTime',
                'implementingClassName' => 'App\\Models\\BreakTime',
                'currentClassName' => 'App\\Models\\BreakTime',
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
                'docComment' => '/** Pesanan yang dijadwalkan pada waktu istirahat ini */',
                'startLine' => 62,
                'endLine' => 65,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Models',
                'declaringClassName' => 'App\\Models\\BreakTime',
                'implementingClassName' => 'App\\Models\\BreakTime',
                'currentClassName' => 'App\\Models\\BreakTime',
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
