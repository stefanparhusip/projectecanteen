<?php

declare(strict_types=1);

// odsl-C:\laragon\www\usk_no_ai\app\Models\Webhook.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Models\Webhook
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6.65.0.9-8.3.26-71d7504bc9189f4e3b02e8179e5159adb50e1af075600f84c4449e066f225a21',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'App\\Models\\Webhook',
                'filename' => 'C:/laragon/www/usk_no_ai/app/Models/Webhook.php',
            ],
        ],
        'namespace' => 'App\\Models',
        'name' => 'App\\Models\\Webhook',
        'shortName' => 'Webhook',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 8,
        'endLine' => 50,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
            'EVENT_ORDER_CREATED' => [
                'declaringClassName' => 'App\\Models\\Webhook',
                'implementingClassName' => 'App\\Models\\Webhook',
                'name' => 'EVENT_ORDER_CREATED',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '\'order_created\'',
                    'attributes' => [
                        'startLine' => 28,
                        'endLine' => 28,
                        'startTokenPos' => 97,
                        'startFilePos' => 662,
                        'endTokenPos' => 97,
                        'endFilePos' => 676,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 28,
                'endLine' => 28,
                'startColumn' => 5,
                'endColumn' => 49,
            ],
            'EVENT_ORDER_READY' => [
                'declaringClassName' => 'App\\Models\\Webhook',
                'implementingClassName' => 'App\\Models\\Webhook',
                'name' => 'EVENT_ORDER_READY',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '\'order_ready\'',
                    'attributes' => [
                        'startLine' => 29,
                        'endLine' => 29,
                        'startTokenPos' => 106,
                        'startFilePos' => 713,
                        'endTokenPos' => 106,
                        'endFilePos' => 725,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 29,
                'endLine' => 29,
                'startColumn' => 5,
                'endColumn' => 47,
            ],
            'EVENT_TOPUP_APPROVED' => [
                'declaringClassName' => 'App\\Models\\Webhook',
                'implementingClassName' => 'App\\Models\\Webhook',
                'name' => 'EVENT_TOPUP_APPROVED',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '\'topup_approved\'',
                    'attributes' => [
                        'startLine' => 30,
                        'endLine' => 30,
                        'startTokenPos' => 115,
                        'startFilePos' => 762,
                        'endTokenPos' => 115,
                        'endFilePos' => 777,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 30,
                'endLine' => 30,
                'startColumn' => 5,
                'endColumn' => 50,
            ],
            'ALL_EVENTS' => [
                'declaringClassName' => 'App\\Models\\Webhook',
                'implementingClassName' => 'App\\Models\\Webhook',
                'name' => 'ALL_EVENTS',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '[self::EVENT_ORDER_CREATED => \'Pesanan Dibuat\', self::EVENT_ORDER_READY => \'Pesanan Siap Diambil\', self::EVENT_TOPUP_APPROVED => \'Top-Up Disetujui\']',
                    'attributes' => [
                        'startLine' => 32,
                        'endLine' => 36,
                        'startTokenPos' => 124,
                        'startFilePos' => 806,
                        'endTokenPos' => 153,
                        'endFilePos' => 992,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 32,
                'endLine' => 36,
                'startColumn' => 5,
                'endColumn' => 6,
            ],
        ],
        'immediateProperties' => [
            'fillable' => [
                'declaringClassName' => 'App\\Models\\Webhook',
                'implementingClassName' => 'App\\Models\\Webhook',
                'name' => 'fillable',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[\'name\', \'url\', \'secret\', \'events\', \'is_active\']',
                    'attributes' => [
                        'startLine' => 10,
                        'endLine' => 16,
                        'startTokenPos' => 33,
                        'startFilePos' => 178,
                        'endTokenPos' => 50,
                        'endFilePos' => 278,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 10,
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
                'docComment' => null,
                'startLine' => 18,
                'endLine' => 24,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'App\\Models',
                'declaringClassName' => 'App\\Models\\Webhook',
                'implementingClassName' => 'App\\Models\\Webhook',
                'currentClassName' => 'App\\Models\\Webhook',
                'aliasName' => null,
            ],
            'scopeActive' => [
                'name' => 'scopeActive',
                'parameters' => [
                    'query' => [
                        'name' => 'query',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Database\\Eloquent\\Builder',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 40,
                        'endLine' => 40,
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
                        'name' => 'Illuminate\\Database\\Eloquent\\Builder',
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
                'declaringClassName' => 'App\\Models\\Webhook',
                'implementingClassName' => 'App\\Models\\Webhook',
                'currentClassName' => 'App\\Models\\Webhook',
                'aliasName' => null,
            ],
            'scopeSubscribedTo' => [
                'name' => 'scopeSubscribedTo',
                'parameters' => [
                    'query' => [
                        'name' => 'query',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Database\\Eloquent\\Builder',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 46,
                        'endLine' => 46,
                        'startColumn' => 39,
                        'endColumn' => 52,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
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
                        'startLine' => 46,
                        'endLine' => 46,
                        'startColumn' => 55,
                        'endColumn' => 67,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Illuminate\\Database\\Eloquent\\Builder',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/** Return only webhooks subscribed to the given event name */',
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
                'declaringClassName' => 'App\\Models\\Webhook',
                'implementingClassName' => 'App\\Models\\Webhook',
                'currentClassName' => 'App\\Models\\Webhook',
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
