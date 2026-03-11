<?php

declare(strict_types=1);

// odsl-C:\laragon\www\usk_no_ai\app\Jobs\AutoRestockJob.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Jobs\AutoRestockJob
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6.65.0.9-8.3.26-7718d83d0b74129c8cc292aca7a4d5a0dfc3081b49e907342fd658071a5ab24c',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'App\\Jobs\\AutoRestockJob',
                'filename' => 'C:/laragon/www/usk_no_ai/app/Jobs/AutoRestockJob.php',
            ],
        ],
        'namespace' => 'App\\Jobs',
        'name' => 'App\\Jobs\\AutoRestockJob',
        'shortName' => 'AutoRestockJob',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * Creates a pending RestockRequest for the given menu.
 *
 * The requested_stock is set to menu.default_stock when available,
 * otherwise falls back to 3× the low_stock_threshold.
 *
 * An admin must approve the request before stock is actually updated.
 */',
        'attributes' => [
        ],
        'startLine' => 21,
        'endLine' => 59,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
            0 => 'Illuminate\\Contracts\\Queue\\ShouldQueue',
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Foundation\\Bus\\Dispatchable',
            1 => 'Illuminate\\Queue\\InteractsWithQueue',
            2 => 'Illuminate\\Bus\\Queueable',
            3 => 'Illuminate\\Queue\\SerializesModels',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'menuId' => [
                'declaringClassName' => 'App\\Jobs\\AutoRestockJob',
                'implementingClassName' => 'App\\Jobs\\AutoRestockJob',
                'name' => 'menuId',
                'modifiers' => 2177,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'int',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => null,
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 26,
                'endLine' => 26,
                'startColumn' => 9,
                'endColumn' => 36,
                'isPromoted' => true,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'stockAlertId' => [
                'declaringClassName' => 'App\\Jobs\\AutoRestockJob',
                'implementingClassName' => 'App\\Jobs\\AutoRestockJob',
                'name' => 'stockAlertId',
                'modifiers' => 2177,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'int',
                                    'isIdentifier' => true,
                                ],
                            ],
                            1 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'null',
                                    'isIdentifier' => true,
                                ],
                            ],
                        ],
                    ],
                ],
                'default' => null,
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 27,
                'endLine' => 27,
                'startColumn' => 9,
                'endColumn' => 49,
                'isPromoted' => true,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
        ],
        'immediateMethods' => [
            '__construct' => [
                'name' => '__construct',
                'parameters' => [
                    'menuId' => [
                        'name' => 'menuId',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'int',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => true,
                        'attributes' => [
                        ],
                        'startLine' => 26,
                        'endLine' => 26,
                        'startColumn' => 9,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'stockAlertId' => [
                        'name' => 'stockAlertId',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 27,
                                'endLine' => 27,
                                'startTokenPos' => 95,
                                'startFilePos' => 804,
                                'endTokenPos' => 95,
                                'endFilePos' => 807,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'int',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'null',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => true,
                        'attributes' => [
                        ],
                        'startLine' => 27,
                        'endLine' => 27,
                        'startColumn' => 9,
                        'endColumn' => 49,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 25,
                'endLine' => 28,
                'startColumn' => 5,
                'endColumn' => 8,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Jobs',
                'declaringClassName' => 'App\\Jobs\\AutoRestockJob',
                'implementingClassName' => 'App\\Jobs\\AutoRestockJob',
                'currentClassName' => 'App\\Jobs\\AutoRestockJob',
                'aliasName' => null,
            ],
            'handle' => [
                'name' => 'handle',
                'parameters' => [
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
                'startLine' => 30,
                'endLine' => 58,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'App\\Jobs',
                'declaringClassName' => 'App\\Jobs\\AutoRestockJob',
                'implementingClassName' => 'App\\Jobs\\AutoRestockJob',
                'currentClassName' => 'App\\Jobs\\AutoRestockJob',
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
