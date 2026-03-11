<?php

declare(strict_types=1);

// odsl-C:\laragon\www\usk_no_ai\app\Models\RestockRequest.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Models\RestockRequest
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6.65.0.9-8.3.26-69ac41745bb0aad0f2ead5077ced0ba040d7998cff36805859ef25756a5e67b5',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'App\\Models\\RestockRequest',
                'filename' => 'C:/laragon/www/usk_no_ai/app/Models/RestockRequest.php',
            ],
        ],
        'namespace' => 'App\\Models',
        'name' => 'App\\Models\\RestockRequest',
        'shortName' => 'RestockRequest',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 8,
        'endLine' => 62,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
            'STATUS_PENDING' => [
                'declaringClassName' => 'App\\Models\\RestockRequest',
                'implementingClassName' => 'App\\Models\\RestockRequest',
                'name' => 'STATUS_PENDING',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '\'pending\'',
                    'attributes' => [
                        'startLine' => 10,
                        'endLine' => 10,
                        'startTokenPos' => 35,
                        'startFilePos' => 206,
                        'endTokenPos' => 35,
                        'endFilePos' => 214,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 10,
                'endLine' => 10,
                'startColumn' => 5,
                'endColumn' => 45,
            ],
            'STATUS_APPROVED' => [
                'declaringClassName' => 'App\\Models\\RestockRequest',
                'implementingClassName' => 'App\\Models\\RestockRequest',
                'name' => 'STATUS_APPROVED',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '\'approved\'',
                    'attributes' => [
                        'startLine' => 11,
                        'endLine' => 11,
                        'startTokenPos' => 46,
                        'startFilePos' => 253,
                        'endTokenPos' => 46,
                        'endFilePos' => 262,
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
            'STATUS_REJECTED' => [
                'declaringClassName' => 'App\\Models\\RestockRequest',
                'implementingClassName' => 'App\\Models\\RestockRequest',
                'name' => 'STATUS_REJECTED',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '\'rejected\'',
                    'attributes' => [
                        'startLine' => 12,
                        'endLine' => 12,
                        'startTokenPos' => 57,
                        'startFilePos' => 301,
                        'endTokenPos' => 57,
                        'endFilePos' => 310,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 12,
                'endLine' => 12,
                'startColumn' => 5,
                'endColumn' => 46,
            ],
        ],
        'immediateProperties' => [
            'fillable' => [
                'declaringClassName' => 'App\\Models\\RestockRequest',
                'implementingClassName' => 'App\\Models\\RestockRequest',
                'name' => 'fillable',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[\'menu_id\', \'stock_alert_id\', \'requested_stock\', \'status\', \'is_auto\', \'requested_by\', \'approved_by\', \'notes\', \'approved_at\']',
                    'attributes' => [
                        'startLine' => 14,
                        'endLine' => 24,
                        'startTokenPos' => 66,
                        'startFilePos' => 342,
                        'endTokenPos' => 95,
                        'endFilePos' => 554,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 14,
                'endLine' => 24,
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
                'startLine' => 26,
                'endLine' => 32,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'App\\Models',
                'declaringClassName' => 'App\\Models\\RestockRequest',
                'implementingClassName' => 'App\\Models\\RestockRequest',
                'currentClassName' => 'App\\Models\\RestockRequest',
                'aliasName' => null,
            ],
            'isPending' => [
                'name' => 'isPending',
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
                'startLine' => 36,
                'endLine' => 39,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Models',
                'declaringClassName' => 'App\\Models\\RestockRequest',
                'implementingClassName' => 'App\\Models\\RestockRequest',
                'currentClassName' => 'App\\Models\\RestockRequest',
                'aliasName' => null,
            ],
            'menu' => [
                'name' => 'menu',
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
                'startLine' => 43,
                'endLine' => 46,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Models',
                'declaringClassName' => 'App\\Models\\RestockRequest',
                'implementingClassName' => 'App\\Models\\RestockRequest',
                'currentClassName' => 'App\\Models\\RestockRequest',
                'aliasName' => null,
            ],
            'stockAlert' => [
                'name' => 'stockAlert',
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
                'startLine' => 48,
                'endLine' => 51,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Models',
                'declaringClassName' => 'App\\Models\\RestockRequest',
                'implementingClassName' => 'App\\Models\\RestockRequest',
                'currentClassName' => 'App\\Models\\RestockRequest',
                'aliasName' => null,
            ],
            'requester' => [
                'name' => 'requester',
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
                'startLine' => 53,
                'endLine' => 56,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Models',
                'declaringClassName' => 'App\\Models\\RestockRequest',
                'implementingClassName' => 'App\\Models\\RestockRequest',
                'currentClassName' => 'App\\Models\\RestockRequest',
                'aliasName' => null,
            ],
            'approver' => [
                'name' => 'approver',
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
                'declaringClassName' => 'App\\Models\\RestockRequest',
                'implementingClassName' => 'App\\Models\\RestockRequest',
                'currentClassName' => 'App\\Models\\RestockRequest',
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
