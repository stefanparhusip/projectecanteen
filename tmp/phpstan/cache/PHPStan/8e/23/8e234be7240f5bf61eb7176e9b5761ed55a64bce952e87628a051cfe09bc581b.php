<?php

declare(strict_types=1);

// odsl-C:\laragon\www\usk_no_ai\app\Models\PointTransaction.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Models\PointTransaction
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6.65.0.9-8.3.26-1bbe3a092395774a94590e2e57fded28febffb6cea28648980dd32970b7c8c1d',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'App\\Models\\PointTransaction',
                'filename' => 'C:/laragon/www/usk_no_ai/app/Models/PointTransaction.php',
            ],
        ],
        'namespace' => 'App\\Models',
        'name' => 'App\\Models\\PointTransaction',
        'shortName' => 'PointTransaction',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 8,
        'endLine' => 34,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
            'TYPE_EARN' => [
                'declaringClassName' => 'App\\Models\\PointTransaction',
                'implementingClassName' => 'App\\Models\\PointTransaction',
                'name' => 'TYPE_EARN',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '\'earn\'',
                    'attributes' => [
                        'startLine' => 10,
                        'endLine' => 10,
                        'startTokenPos' => 35,
                        'startFilePos' => 210,
                        'endTokenPos' => 35,
                        'endFilePos' => 215,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 10,
                'endLine' => 10,
                'startColumn' => 5,
                'endColumn' => 44,
            ],
            'TYPE_REDEEM' => [
                'declaringClassName' => 'App\\Models\\PointTransaction',
                'implementingClassName' => 'App\\Models\\PointTransaction',
                'name' => 'TYPE_REDEEM',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '\'redeem\'',
                    'attributes' => [
                        'startLine' => 11,
                        'endLine' => 11,
                        'startTokenPos' => 46,
                        'startFilePos' => 256,
                        'endTokenPos' => 46,
                        'endFilePos' => 263,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 11,
                'endLine' => 11,
                'startColumn' => 5,
                'endColumn' => 46,
            ],
            'TYPE_ADMIN_ADJUST' => [
                'declaringClassName' => 'App\\Models\\PointTransaction',
                'implementingClassName' => 'App\\Models\\PointTransaction',
                'name' => 'TYPE_ADMIN_ADJUST',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '\'admin_adjust\'',
                    'attributes' => [
                        'startLine' => 12,
                        'endLine' => 12,
                        'startTokenPos' => 57,
                        'startFilePos' => 304,
                        'endTokenPos' => 57,
                        'endFilePos' => 317,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 12,
                'endLine' => 12,
                'startColumn' => 5,
                'endColumn' => 52,
            ],
        ],
        'immediateProperties' => [
            'fillable' => [
                'declaringClassName' => 'App\\Models\\PointTransaction',
                'implementingClassName' => 'App\\Models\\PointTransaction',
                'name' => 'fillable',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[\'user_id\', \'points\', \'type\', \'ref_type\', \'ref_id\', \'description\']',
                    'attributes' => [
                        'startLine' => 14,
                        'endLine' => 21,
                        'startTokenPos' => 66,
                        'startFilePos' => 349,
                        'endTokenPos' => 86,
                        'endFilePos' => 476,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 14,
                'endLine' => 21,
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
                'startLine' => 23,
                'endLine' => 28,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'App\\Models',
                'declaringClassName' => 'App\\Models\\PointTransaction',
                'implementingClassName' => 'App\\Models\\PointTransaction',
                'currentClassName' => 'App\\Models\\PointTransaction',
                'aliasName' => null,
            ],
            'user' => [
                'name' => 'user',
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
                'startLine' => 30,
                'endLine' => 33,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Models',
                'declaringClassName' => 'App\\Models\\PointTransaction',
                'implementingClassName' => 'App\\Models\\PointTransaction',
                'currentClassName' => 'App\\Models\\PointTransaction',
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
