<?php

declare(strict_types=1);

// odsl-C:\laragon\www\usk_no_ai\app\Console\Commands\CreateRecurringOrders.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Console\Commands\CreateRecurringOrders
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6.65.0.9-8.3.26-7f9c061946182724c5df8e85e74b41d9192c723591e32c341f499d74db66fb07',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'App\\Console\\Commands\\CreateRecurringOrders',
                'filename' => 'C:/laragon/www/usk_no_ai/app/Console/Commands/CreateRecurringOrders.php',
            ],
        ],
        'namespace' => 'App\\Console\\Commands',
        'name' => 'App\\Console\\Commands\\CreateRecurringOrders',
        'shortName' => 'CreateRecurringOrders',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 13,
        'endLine' => 122,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Illuminate\\Console\\Command',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'signature' => [
                'declaringClassName' => 'App\\Console\\Commands\\CreateRecurringOrders',
                'implementingClassName' => 'App\\Console\\Commands\\CreateRecurringOrders',
                'name' => 'signature',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'orders:recurring\'',
                    'attributes' => [
                        'startLine' => 15,
                        'endLine' => 15,
                        'startTokenPos' => 58,
                        'startFilePos' => 347,
                        'endTokenPos' => 58,
                        'endFilePos' => 364,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 15,
                'endLine' => 15,
                'startColumn' => 5,
                'endColumn' => 48,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'description' => [
                'declaringClassName' => 'App\\Console\\Commands\\CreateRecurringOrders',
                'implementingClassName' => 'App\\Console\\Commands\\CreateRecurringOrders',
                'name' => 'description',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'Buat pesanan otomatis dari jadwal recurring order untuk hari ini\'',
                    'attributes' => [
                        'startLine' => 16,
                        'endLine' => 16,
                        'startTokenPos' => 67,
                        'startFilePos' => 397,
                        'endTokenPos' => 67,
                        'endFilePos' => 462,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 16,
                'endLine' => 16,
                'startColumn' => 5,
                'endColumn' => 96,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
        ],
        'immediateMethods' => [
            'handle' => [
                'name' => 'handle',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'int',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 18,
                'endLine' => 38,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Console\\Commands',
                'declaringClassName' => 'App\\Console\\Commands\\CreateRecurringOrders',
                'implementingClassName' => 'App\\Console\\Commands\\CreateRecurringOrders',
                'currentClassName' => 'App\\Console\\Commands\\CreateRecurringOrders',
                'aliasName' => null,
            ],
            'processOne' => [
                'name' => 'processOne',
                'parameters' => [
                    'ro' => [
                        'name' => 'ro',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'App\\Models\\RecurringOrder',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 44,
                        'endLine' => 44,
                        'startColumn' => 33,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
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
 * Proses satu recurring order dalam DB transaction.
 * Return true jika berhasil membuat order, false jika dilewati.
 */',
                'startLine' => 44,
                'endLine' => 121,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'App\\Console\\Commands',
                'declaringClassName' => 'App\\Console\\Commands\\CreateRecurringOrders',
                'implementingClassName' => 'App\\Console\\Commands\\CreateRecurringOrders',
                'currentClassName' => 'App\\Console\\Commands\\CreateRecurringOrders',
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
