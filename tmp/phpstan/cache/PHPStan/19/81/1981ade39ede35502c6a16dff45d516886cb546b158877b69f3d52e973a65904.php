<?php

declare(strict_types=1);

// odsl-C:\laragon\www\usk_no_ai\app\Console\Commands\CheckLowStock.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Console\Commands\CheckLowStock
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6.65.0.9-8.3.26-1ece93c8de1af838582c93c81fafaedd6b4df35f5aa09fcdd09c863196e64a63',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'App\\Console\\Commands\\CheckLowStock',
                'filename' => 'C:/laragon/www/usk_no_ai/app/Console/Commands/CheckLowStock.php',
            ],
        ],
        'namespace' => 'App\\Console\\Commands',
        'name' => 'App\\Console\\Commands\\CheckLowStock',
        'shortName' => 'CheckLowStock',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * Scans every menu that has a low_stock_threshold set and fires alerts
 * for those in a low-stock condition.
 *
 * Usage:
 *   php artisan stock:check-alerts           # normal run
 *   php artisan stock:check-alerts --dry-run # counts without persisting
 */',
        'attributes' => [
        ],
        'startLine' => 16,
        'endLine' => 34,
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
                'declaringClassName' => 'App\\Console\\Commands\\CheckLowStock',
                'implementingClassName' => 'App\\Console\\Commands\\CheckLowStock',
                'name' => 'signature',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'stock:check-alerts
                            {--dry-run : Count affected menus without creating alerts}\'',
                    'attributes' => [
                        'startLine' => 18,
                        'endLine' => 19,
                        'startTokenPos' => 35,
                        'startFilePos' => 456,
                        'endTokenPos' => 35,
                        'endFilePos' => 563,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 18,
                'endLine' => 19,
                'startColumn' => 5,
                'endColumn' => 88,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'description' => [
                'declaringClassName' => 'App\\Console\\Commands\\CheckLowStock',
                'implementingClassName' => 'App\\Console\\Commands\\CheckLowStock',
                'name' => 'description',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'Check menu stock levels and fire low-stock alerts\'',
                    'attributes' => [
                        'startLine' => 21,
                        'endLine' => 21,
                        'startTokenPos' => 44,
                        'startFilePos' => 598,
                        'endTokenPos' => 44,
                        'endFilePos' => 648,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 21,
                'endLine' => 21,
                'startColumn' => 5,
                'endColumn' => 81,
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
                    'service' => [
                        'name' => 'service',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'App\\Services\\StockAlertService',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 23,
                        'endLine' => 23,
                        'startColumn' => 28,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
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
                'startLine' => 23,
                'endLine' => 33,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Console\\Commands',
                'declaringClassName' => 'App\\Console\\Commands\\CheckLowStock',
                'implementingClassName' => 'App\\Console\\Commands\\CheckLowStock',
                'currentClassName' => 'App\\Console\\Commands\\CheckLowStock',
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
